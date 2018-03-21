<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
	public function _create($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	public function _read($table, $num = null, $offset = null)
	{
		return $this->db->get($table, $num, $offset);
	}
	public function _read_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	public function _update($table, $data, $where)
	{
		return $this->db->update($table, $data, $where);
	}
	public function _delete($table, $where)
	{
		return $this->db->delete($table, $where);
	}
	public function send_mail($email, $subject, $content)
	{
		$conf = $this->_read('users')->row_array();
		$data = $this->_read_where('users', array('email' => $email), 1)->row_array();
		$message = '<html><body style="margin:0;font-family:cursive;"><center>
								<h1 style="background:lightblue;padding:3%">NAMA WEBSITE</h1>
								<p style="padding:7% 0;">'.$content.'</p>
								<p style="background:lightblue;padding:3%">'.$_SERVER['SERVER_NAME'].'</p></center></body></html>';
		$config = array(
			'protocol' => 'smtp',
			'mailtype' => 'html',
			'smtp_host' => 'HOST',
			'smtp_port' => 'PORT',
			'smtp_user' => 'USER',
			'smtp_pass' => 'PASSWORD',
			'charset' => 'iso-8859-1',
			'newline' => "\r\n",
			'crlf' => "\r\n"
		);
		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->from($config['smtp_user'], 'NAMA WEBSITE');
		$this->email->to($data['email']);
		$this->email->subject($subject);
		$this->email->message($message);
		return $this->email->send();
	}
}
