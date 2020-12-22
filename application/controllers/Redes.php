<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redes extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Redes');
        $this->load->helper('vistas');
    }
    
	public function index()
	{
        $data = $this->Users->getuserall();
        $vista = $this->load->view('main/redes', ['data' => $data], true);
        getTemplate($vista);
    }
}