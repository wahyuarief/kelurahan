<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {
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
    $this->data['surat_masuk'] = $this->crud_model->_read_where('laporan', ['kat_id'=>1, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/surat_masuk';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
	}
  public function keluar()
  {
    $this->db->order_by('id', 'DESC');
    $this->data['surat_keluar'] = $this->crud_model->_read_where('laporan', ['kat_id'=>2, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/surat_keluar';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function tugas()
  {
    $this->db->order_by('id', 'DESC');
    $this->data['surat_tugas'] = $this->crud_model->_read_where('laporan', ['kat_id'=>3, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/surat_tugas';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function keputusan()
  {
    $this->db->order_by('id', 'DESC');
    $this->data['surat_keputusan'] = $this->crud_model->_read_where('laporan', ['kat_id'=>4, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/surat_keputusan';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
  public function tambah()
  {
    $this->data['page'] = 'dashboard/tambah_surat';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
  }
}
