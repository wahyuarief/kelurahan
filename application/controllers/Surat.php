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
      $this->data['nama_pegawai'] = $row['nama_belakang'];
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
    $this->form_validation->set_rules('nama', 'Judul', 'required');
    $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
    $this->form_validation->set_rules('nosurat', 'Nomor Surat', 'required');        
    $this->form_validation->set_rules('noregistrasi', 'Nomor Registrasi', 'required');    
    
    if($this->form_validation->run())
    {      
      $s = $this->input->post('nama',true);
      $slug = strtolower(str_replace(' ','-',$s));
      $d = array(
              'peg_id' => $this->data['nip'],
              'kat_id' => $this->input->post('kategoriid',true),
              'nama' =>  $this->input->post('nama',true),
              'isi' => $this->input->post('isi',true),
              'no_surat' => $this->input->post('nosurat',true),
              'no_registrasi' => $this->input->post('noregistrasi',true),
              'slug' =>$slug ,
      );

      $this->crud_model->_create('laporan',$d);
      
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Dimasukkan');
      redirect(base_url('surat/tambah'));
    }else{
      $this->data['page'] = 'dashboard/tambah_surat';
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
      $slug = strtolower(str_replace(' ','-',$s));
      $d = array(
              'peg_id' => $this->data['nip'],
              'kat_id' => $this->input->post('kategoriid',true),
              'nama' =>  $this->input->post('nama',true),
              'isi' => $this->input->post('isi',true),
              'no_surat' => $this->input->post('nosurat',true),
              'no_registrasi' => $this->input->post('noregistrasi',true),
              'slug' =>$slug ,
              'updated_at' => date('Y-m-d H:i:s'),
      );
      $w = array('id' => $this->input->post('id',true));

      $this->crud_model->_update('laporan',$d,$w);
      
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Diupdate');
      redirect(base_url('surat/masuk'));
    }else{
      $this->data['page'] = 'dashboard/edit_surat';
      $this->data['listData'] = $this->crud_model->_read_where('laporan', ['id'=>$id])->result();
      $this->data['listKategori'] = $this->crud_model->_read('kategori_laporan')->result();
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
  public function delete($id)
  {
    $w = array('id'=>$id);
    $this->crud_model->_delete('laporan',$w);
    $this->session->set_flashdata('msg_berhasil','Data Berhasil Didelete');
    redirect(base_url('surat/masuk'));
  }
}
