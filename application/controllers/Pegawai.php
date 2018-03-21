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
      $this->data['nama_pegawai'] = $row['nama'];
      $this->data['jabatan'] = $row['jabatan'];
      $this->data['foto'] = $row['foto'];
    }
  }
	public function index()
	{
    $this->data['pegawai'] = $this->crud_model->_read('pegawai')->result_array();
    $this->data['page'] = 'dashboard/pegawai';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
	}
  public function detail()
  {
    $input['nip'] = $this->uri->segment(3);
    $this->data['page'] = 'dashboard/detail_pegawai';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function tambah()
  {
    $this->data['page'] = 'dashboard/tambah_pegawai';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
}
