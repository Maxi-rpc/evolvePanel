<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		print_r($_POST);
        $this->load->view('auth/login');
	}
	public function login()
	{
		print_r($_POST);
	}
}