<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    error_reporting(0);
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
    $katlap = $this->crud_model->_read('kategori_laporan')->row_array();
    $this->db->limit(5);
    $this->db->order_by('id', 'DESC');
    $this->data['surat_masuk'] = $this->crud_model->_read_where('laporan', ['kat_id'=>1, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['surat_keluar'] = $this->crud_model->_read_where('laporan', ['kat_id'=>2, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['surat_tugas'] = $this->crud_model->_read_where('laporan', ['kat_id'=>3, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['surat_keputusan'] = $this->crud_model->_read_where('laporan', ['kat_id'=>4, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['undangan_masuk'] = $this->crud_model->_read_where('laporan', ['kat_id'=>5, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['undangan_keluar'] = $this->crud_model->_read_where('laporan', ['kat_id'=>6, 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/home';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
	}
  public function logout()
  {
    date_default_timezone_set('Asia/Jakarta');
    $this->crud_model->_update('pegawai', ['last_login'=>date('Y-m-d H:i:s')], ['nip'=>$this->session->userdata['pondokbambu']['nip']]);
    $this->session->unset_userdata('pondokbambu');
    redirect(base_url('login'));
  }
}
