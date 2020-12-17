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
}