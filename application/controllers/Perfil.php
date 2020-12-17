<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Users');
        $this->load->helper('vistas');
    }
    
	public function index()
	{
        $vista = $this->load->view('main/perfil', '', true);
        getTemplate($vista);
        
    }
    
    public function mostrarPerfil(){
        $email = $_SESSION['email'];
        $data = $this->Users->getuser($email);
        $vista = $this->load->view('main/perfil', ['data' => $data], true);
        getTemplate($vista);	
    }
    /*public function getTemplate($view){
		$data = array(
			'header' => $this->load->view('includes/header','',TRUE),
			'navbar' => $this->load->view('includes/navbar','',TRUE),
			'aside' => $this->load->view('includes/aside','',TRUE),
			'content' => $view,
			'footer' => $this->load->view('includes/footer','',TRUE),					
		);
					
		$this->load->view('dashboard',$data);
	}*/
}