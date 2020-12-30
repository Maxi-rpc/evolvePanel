<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminarea extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model(['Users','UserInfo','Teams','Perfiles']);
        $this->load->helper('vistas');
    }
    
	public function index()
	{
        $user = $this->Users->getuserall();
        $userInfo = $this->UserInfo->getuserInfo();
        $teams = $this->Teams->getTeam();
        $perfiles = $this->Perfiles->getPerfilAll();
        $datosSql = getCantidadDatosSQL();

        $vista = $this->load->view('main/adminarea/adminarea', ['user' => $user,'userInfo' => $userInfo,'teams'=>$teams, 'perfiles' => $perfiles, 'datosSql' => $datosSql], true);
        getTemplate($vista);
    }
}