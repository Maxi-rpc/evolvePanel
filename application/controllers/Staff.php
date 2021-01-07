<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->helper('vistas');
        $this->load->model(['UserInfo_m','Sector_m','Puesto_m']);
	}

	public function index()
	{
        $data['userInfo'] = $this->UserInfo_m->get();
		$data['sectores'] = $this->Sector_m->get();
        $data['puestos'] = $this->Puesto_m->get();
        
        $vista = $this->load->view('main/staff/index',$data,TRUE);
		getTemplate($vista);
    }

}