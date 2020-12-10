<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('auth/login');
	}
	public function nuevo()
	{
		$resultado=$this->Login_model->getUser();
		print_r($resultado);
	}
}