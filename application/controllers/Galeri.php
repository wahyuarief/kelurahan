<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
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
  function index()
	{
    $image_crud = new image_CRUD();
    $image_crud->set_table('galeri');
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_title_field('title');
		$image_crud->set_image_path('uploads');
    $image_crud->unset_upload();
		$image_crud->unset_delete();
		$output = $image_crud->render();
    $this->load->view('home/galeri',$output);
	}
  public function tambah()
  {
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }
    $this->data['page'] = 'dashboard/tambah_galeri';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function edit()
  {
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }
    $this->data['page'] = 'dashboard/edit_informasi';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function hapus()
  {
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }
  }
}
