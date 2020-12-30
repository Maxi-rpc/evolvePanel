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
        $user = $this->Users->getuserall();
        $perfiles = $this->Perfiles->getPerfilAll();
        $datosSql = getCantidadDatosSQL();

        $vista = $this->load->view('main/adminarea/adminarea', ['user' => $user, 'perfiles' => $perfiles, 'datosSql' => $datosSql], true);
        getTemplate($vista);
    }
}