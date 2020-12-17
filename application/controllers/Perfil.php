<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Users');
    }
    
	public function index()
	{
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('main/perfil');
        $this->load->view('includes/footer');
    }
    
    public function mostrarPerfil(){
        $email = $_SESSION['email'];
        $data = $this->Users->getuser($email);
        $vista = $this->load->view('main/perfil', ['data' => $data], true);
        $this->getTemplate($vista);	
    }
    public function getTemplate($view){
		$data = array(
			'head' => $this->load->view('includes/head','',TRUE),
			'nav' => $this->load->view('includes/nav','',TRUE),
			'aside' => $this->load->view('includes/aside','',TRUE),
			'content' => $view,
			'footer' => $this->load->view('includes/footer','',TRUE),				
		);
					
		$this->load->view('dashboard',$data);
	}
}