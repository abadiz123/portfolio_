<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['logs'] = "default";
		$this->load->view('login_index', $data);
	}
	public function error(){
		$data['logs'] = "errpr";
		$this->load->view('login_index', $data);
	}
}
