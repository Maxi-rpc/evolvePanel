<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->view('includes/header');
        $this->load->view('auth/login');
	}
	public function nuevo()
	{
		$this->Login_model->updateUser();
	}
}