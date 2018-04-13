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
	public function index()
	{
    $this->data['page'] = 'home/galeri';
    $this->parser->parse('home/layout/wrapper', $this->data);
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
