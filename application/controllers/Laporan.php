<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
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
	public function detail()
	{
    $slug = $this->uri->segment(3);
    $this->data['kategori'] = $this->crud_model->_read_where('kategori_laporan', ['slug'=>$slug])->row_array();
    $this->db->order_by('id', 'DESC');
    $this->data['laporan'] = $this->crud_model->_read_where('laporan', ['kat_id'=>$this->data['kategori']['id'], 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/laporan';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
	}
  public function tambah()
  {
    $this->form_validation->set_rules('nama', 'Judul', 'required');
    $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
    $this->form_validation->set_rules('nosurat', 'Nomor Surat', 'required');
    $this->form_validation->set_rules('noregistrasi', 'Nomor Registrasi', 'required');

    if($this->form_validation->run())
    {
      $s = $this->input->post('nama',true);
      $slug = url_title(convert_accented_characters($s));
      $d = array(
        'peg_id' => $this->data['nip'],
        'kat_id' => $this->input->post('kategoriid',true),
        'nama' =>  $this->input->post('nama',true),
        'isi' => $this->input->post('isi',true),
        'no_laporan' => $this->input->post('nosurat',true),
        'no_registrasi' => $this->input->post('noregistrasi',true),
        'slug' => $slug,
        'created_at' => date('Y-m-d H:i:s')
      );

      $this->crud_model->_create('laporan',$d);

      $this->session->set_flashdata('msg_berhasil','Data Berhasil Ditambahkan');
      redirect(base_url('laporan/tambah'));
    }else{
      $this->data['page'] = 'dashboard/tambah_laporan';
      $this->data['listKategori'] = $this->crud_model->_read('kategori_laporan')->result();
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
  public function edit($id)
  {
    $this->form_validation->set_rules('nama', 'Judul', 'required');
    $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
    $this->form_validation->set_rules('nosurat', 'Nomor Surat', 'required');
    $this->form_validation->set_rules('noregistrasi', 'Nomor Registrasi', 'required');

    if($this->form_validation->run())
    {
      $s = $this->input->post('nama',true);
      $slug = url_title(convert_accented_characters($s));
      $d = array(
        'peg_id' => $this->data['nip'],
        'kat_id' => $this->input->post('kategoriid',true),
        'nama' =>  $this->input->post('nama',true),
        'isi' => $this->input->post('isi',true),
        'no_laporan' => $this->input->post('nosurat',true),
        'no_registrasi' => $this->input->post('noregistrasi',true),
        'slug' =>$slug ,
        'updated_at' => date('Y-m-d H:i:s'),
      );
      $w = array('id' => $this->input->post('id',true));

      $this->crud_model->_update('laporan',$d,$w);

      $this->session->set_flashdata('msg_berhasil','Data Berhasil Diperbaharui');
      echo '<script>window.history.back();</script>';
    }else{
      $this->data['page'] = 'dashboard/edit_laporan';
      $this->data['listData'] = $this->crud_model->_read_where('laporan', ['id'=>$id,'peg_id'=>$this->session->userdata('pondokbambu')['nip']])->result();
      $this->data['listKategori'] = $this->crud_model->_read('kategori_laporan')->result();
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
  public function delete($id)
  {
    if ($this->crud_model->_delete('laporan',['id'=>$id,'peg_id'=>$this->session->userdata('pondokbambu')['nip']])) {
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Dihapus');
      echo '<script>window.history.back();</script>';
    }
  }
}
