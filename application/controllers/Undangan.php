<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undangan extends CI_Controller {
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
	public function masuk()
	{
    $this->db->limit(5);
    $this->db->order_by('id', 'DESC');
    $this->data['undangan_masuk'] = $this->crud_model->_read_where('laporan', ['kat_id'=>5, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/undangan_masuk';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
	}
  public function keluar()
  {
    $this->db->order_by('id', 'DESC');
    $this->data['undangan_keluar'] = $this->crud_model->_read_where('laporan', ['kat_id'=>6, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/undangan_keluar';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function tambah()
  {
    $this->data['page'] = 'dashboard/tambah_undangan';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
}
