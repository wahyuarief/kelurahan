<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }
    $pegawai = $this->crud_model->_read_where('pegawai', ['nip'=>$this->session->userdata('pondokbambu')['nip']])->result_array();
    foreach ($pegawai as $row) {
      $this->data['nip'] = $row['nip'];
      $this->data['nama_pegawai'] = $row['nama_depan'];
      $this->data['jabatan'] = $row['jabatan'];
      $this->data['foto'] = $row['foto'];
    }
    $this->data['katlap'] = $this->crud_model->_read('kategori_laporan')->result_array();
  }
	public function index()
	{
    $this->data['pegawai'] = $this->crud_model->_read('pegawai')->result_array();
    $this->data['page'] = 'dashboard/pegawai';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
	}
  public function detail($nip)
  {
    $kat_slug = $this->uri->segment(4);
    $this->data['kategori'] = $this->crud_model->_read_where('kategori_laporan', ['slug'=>$kat_slug])->row_array();
    $this->data['laporan'] = $this->crud_model->_read_where('laporan', ['peg_id'=>$nip,'kat_id'=>$this->data['kategori']['id']])->result_array();
    $this->data['pegawai'] = $this->crud_model->_read_where('pegawai', ['nip'=>$nip])->row_array();
    $this->data['page'] = 'dashboard/detail_pegawai';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function tambah()
  {
    $this->form_validation->set_rules('nip', 'Nomor Induk Pegawai', 'required|trim');
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|trim');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    if ($this->form_validation->run()) {
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 10024;
  		$config['file_ext_tolower']     = TRUE;
      $config['encrypt_name']         = TRUE;
      $this->load->library('upload', $config);
      $input = array(
        'nip' => $this->input->post('nip'),
        'nama_depan' => $this->input->post('nama_depan'),
        'nama_belakang' => $this->input->post('nama_belakang'),
        'jabatan' => $this->input->post('jabatan'),
        'keterangan' => $this->input->post('keterangan'),
        'foto' => $this->upload->data()['file_name'],
        'email' => $this->input->post('email'),
        'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        'created_at' => date('Y-m-d H:i:s')
      );
      $this->crud_model->_create('pegawai', $input);
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Ditambahkan');
      redirect(base_url('pegawai/tambah'));
    } else {
      $this->data['page'] = 'dashboard/tambah_pegawai';
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
  public function edit()
  {
    $id = $this->session->userdata('pondokbambu')['nip'];
    $data = $this->crud_model->_read_where('pegawai', ['nip'=>$id])->row_array();
    $this->form_validation->set_rules('nip', 'Nomor Induk Pegawai', 'required|trim');
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|trim');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    if($this->form_validation->run())
    {
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 10024;
  		$config['file_ext_tolower']     = TRUE;
      $config['encrypt_name']         = TRUE;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto')) {
        $foto = $data['foto'];
      } else {
        $foto = $this->upload->data()['file_name'];
      }

      if (!$this->input->post('password')) {
        $password = $data['password'];
      } else {
        $password = $this->input->post('password');
      }
      $d = array(
        'nip' => $this->input->post('nip',true),
        'nama_depan' => $this->input->post('nama_depan',true),
        'nama_belakang' => $this->input->post('nama_belakang',true),
        'jabatan' => $this->input->post('jabatan',true),
        'keterangan' => $this->input->post('keterangan',true),
        'foto' => $foto,
        'email' => $this->input->post('email',true),
        'password' => $password,
        'updated_at' => date('Y-m-d H:i:s'),
      );
      $this->crud_model->_update('pegawai',$d,['nip'=>$id]);

      $this->session->set_flashdata('msg_berhasil','Data Berhasil Diupdate');
      redirect(base_url('pegawai/edit'));
    }else{
      $this->data['page'] = 'dashboard/edit_pegawai';
      $this->data['listData'] = $this->crud_model->_read_where('pegawai', ['nip'=>$id])->result();
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
}
