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
					"perfil"=>$login[0]->perfil,
				);
				$this->session->userdata($array);
			}
			$this->load->loadViews('login');
		}
	}

	function loadViews($view,$data=null)
	{
		if($_SESSION){ //SI HAY SESION CREADA
			if($view=="login"){ //SI LA VISTA ES LOGIN REDIRIGE A HOME
				redirect(base_url()."home","location");
			}
			//SI ES UNA VISTA CUALQUIERA SE CARGA
			redirect(base_url()."home","location");
		}else{ //NO HAY SESION
			if($view=="login"){ //REDIRECCIONA A LOGIN
				redirect(base_url()."login","location");
			}else{ //CUALQUIER VISTA A LOGIN
			redirect(base_url()."login","location");
			}
		}
	}
}