<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    // error_reporting(0);
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
    $data = $this->crud_model->_read('pengaturan')->row_array();
    $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    if($this->form_validation->run())
    {
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 2048;
  		$config['file_ext_tolower']     = TRUE;
      $config['encrypt_name']         = TRUE;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('logo')) {
        $logo = $data['logo'];
      } else {
        $logo = $this->upload->data()['file_name'];
      }

      $input = array(
        'judul' => $this->input->post('judul',true),
        'deskripsi' => $this->input->post('deskripsi',true),
        'logo' => $logo
      );
      $this->crud_model->_update('pengaturan',$input);

      $this->session->set_flashdata('msg_berhasil','Data Berhasil Diupdate');
      redirect(base_url('pengaturan'));
    }else{
      $this->data['pengaturan'] = $this->crud_model->_read('pengaturan')->row_array();
      $this->data['page'] = 'dashboard/pengaturan';
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
}
