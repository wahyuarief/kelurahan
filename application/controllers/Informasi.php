<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    error_reporting(0);
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
    $this->data['info'] = $this->crud_model->_read('informasi')->result_array();
    $this->data['page'] = 'home/home';
    $this->parser->parse('home/layout/wrapper', $this->data);
	}
  public function detail($slug)
	{
    $this->data['info'] = $this->crud_model->_read_where('informasi', ['slug'=>$slug])->row_array();
    $this->data['user'] = $this->crud_model->_read_where('pegawai', ['nip'=>$this->data['info']['peg_id']])->row_array();
    $this->data['page'] = 'home/detail';
    $this->parser->parse('home/layout/wrapper', $this->data);
	}
  public function tambah()
  {
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }

    $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
    $this->form_validation->set_rules('konten', 'Konten', 'trim|required');
    if ($this->form_validation->run() === FALSE) {
      $this->data['page'] = 'dashboard/tambah_informasi';
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    } else {
      $input = array(
        'peg_id' => $this->session->userdata('pondokbambu')['nip'],
        'judul' => $this->input->post('judul', 1),
        'konten' => $this->input->post('konten', 1),
        'slug' => strtolower(url_title(convert_accented_characters($this->input->post('judul', 1)))),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      );
      $this->crud_model->_create('informasi', $input);
      $this->session->set_flashdata('msg_berhasil', 'Data berhasil ditambahkan');
      redirect(base_url('informasi/tambah'));
    }
  }
  public function edit($id)
  {
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }
    $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
    $this->form_validation->set_rules('konten', 'Konten', 'required|trim');
    if ($this->form_validation->run() === FALSE) {
      $this->data['informasi'] = $this->crud_model->_read_where('informasi', ['id'=>$id])->row_array();
      $this->data['user'] = $this->crud_model->_read_where('pegawai', ['nip'=>$this->data['informasi']['peg_id']])->row_array();
      $this->data['page'] = 'dashboard/edit_informasi';
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    } else {
      $input = array(
        'judul' => $this->input->post('judul', 1),
        'konten' => $this->input->post('konten', 1),
        'slug' => strtolower(url_title(convert_accented_characters($this->input->post('judul', 1)))),
        'updated_at' => date('Y-m-d H:i:s')
      );
      $this->crud_model->_create('informasi', $input);
      $this->session->set_flashdata('msg_berhasil', 'Data berhasil ditambahkan');
      redirect(base_url('informasi/edit'));
    }
  }
  public function hapus()
  {
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }

    if ($this->crud_model->_delete('informasi',['id'=>$id,'peg_id'=>$this->session->userdata('pondokbambu')['nip']])) {
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Dihapus');
      echo '<script>window.history.back();</script>';
    }
  }
  public function list()
  {
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }
    $this->data['informasi'] = $this->crud_model->_read('informasi')->result_array();
    $this->data['page'] = 'dashboard/informasi';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
}
