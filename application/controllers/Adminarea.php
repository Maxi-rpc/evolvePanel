<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminarea extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model(['Users','Perfiles']);
        $this->load->helper('vistas');
    }
    
	public function index()
	{
        $data = $this->Users->getuserall();
        $perfiles = $this->Perfiles->getPerfilAll();
        $datos = getDatos();

        $vista = $this->load->view('main/adminarea', ['data' => $data, 'perfiles' => $perfiles, 'datos' => $datos], true);
        getTemplate($vista);
    }
}