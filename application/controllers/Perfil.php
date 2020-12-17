<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Users');
        $this->load->helper(['view']);
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
        $view = $this->load->view('main/perfil', ['data' => $data], true);
        getTemplate($view);
    }
}