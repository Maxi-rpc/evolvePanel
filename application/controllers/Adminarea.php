<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminarea extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model(['Users','UserInfo','Perfiles']);
        $this->load->helper('vistas');
    }
    
	public function index()
	{
        $user = $this->Users->getuserall();
        $userInfo = $this->UserInfo->getuserInfo();
        $perfiles = $this->Perfiles->getPerfilAll();
        $datosSql = getCantidadDatosSQL();

        $vista = $this->load->view('main/adminarea/adminarea', ['user' => $user,'userInfo' => $userInfo, 'perfiles' => $perfiles, 'datosSql' => $datosSql], true);
        getTemplate($vista);
    }
}