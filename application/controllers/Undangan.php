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
      $this->data['nama_pegawai'] = $row['nama_belakang'];
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
    $this->form_validation->set_rules('nama', 'Judul', 'required');
    $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
    $this->form_validation->set_rules('noundagan', 'Nomor Undangan', 'required');        
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
              'no_undangan' => $this->input->post('noundagan',true),
              'no_registrasi' => $this->input->post('noregistrasi',true),
              'slug' =>$slug ,
              'updated_at' => date('Y-m-d H:i:s'),
      );

      $this->crud_model->_create('laporan',$d);
      
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Diupdate');
      redirect(base_url('undangan/tambah'));
    }else{
      $this->data['page'] = 'dashboard/tambah_undangan';
      $this->data['listKategori'] = $this->crud_model->_read('kategori_laporan')->result();
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
  public function edit($id)
  {
    $this->form_validation->set_rules('nama', 'Judul', 'required');
    $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
    $this->form_validation->set_rules('noundangan', 'Nomor Undangan', 'required');        
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
              'no_undangan' => $this->input->post('noundangan',true),
              'no_registrasi' => $this->input->post('noregistrasi',true),
              'slug' =>$slug ,
              'updated_at' => date('Y-m-d H:i:s'),
      );
      $w = array('id' => $this->input->post('id',true));

      $this->crud_model->_update('laporan',$d,$w);
      
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Diupdate');
      redirect(base_url('undangan/masuk'));
    }else{
      $this->data['page'] = 'dashboard/edit_undangan';
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
    redirect(base_url('undangan/masuk'));
  }
}
