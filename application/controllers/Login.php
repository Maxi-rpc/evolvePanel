<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
        $this->load->view('auth/login');
	}
	
	public function loginIn()
	{
		if($_POST['email'] && $_POST['password']){
			$login=$this->Login_model->loginUser($_POST);
			if($login){
				$array=array(
					"id"=>$login[0]->id,
					"email"=>$login[0]->email,
					"password"=>$login[0]->password,
					"name"=>$login[0]->name,
				);

				$this->session->userdata($array);
			}
			$this->load->view('auth/login');
		}
	}
}