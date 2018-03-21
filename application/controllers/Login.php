<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    if ($this->session->has_userdata('pondokbambu')) {
      redirect(base_url());
    }
  }
  public function index()
	{
    $this->form_validation->set_rules('nip', 'Nomor Induk Pegawai', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() === FALSE) {
  		$this->load->view('login');
    } else {
      $input['nip'] = $this->input->post('nip');
      $password = $this->input->post('password');
      $login = $this->crud_model->_read_where('pegawai', $input);
      $data = $login->row_array();
      if (password_verify($password, $data['password'])) {
        if ($login->num_rows() <> 0) {
          $this->session->set_userdata('pondokbambu', array(
            'nip' => $data['nip'],
            'nama' => $data['nama'],
            'jabatan' => $data['jabatan']
          ));
          redirect(base_url());
        }
      }
    }
	}
}
