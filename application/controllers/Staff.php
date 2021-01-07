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

	public function search($id = NULL)
	{
		$data['userInfo'] = $this->UserInfo_m->get();
		$data['sectores'] = $this->Sector_m->get();
		$data['puestos'] = $this->Puesto_m->get();

		// Buscamos los datos para mostrar en Search
		$userSearch['info'] = $this->UserInfo_m->get($id);
		$userSearch['sector'] = $this->Sector_m->get($this->info->sector);

		$data['userSearch'] = array(
			'nombre' => $this->info->nombre,
			'apellido' => $this->info->apellido,
			'nickname' => $this->info->nickname,
			'email' => $this->info->email,
			'sector' => $this->sector->nombre,
		);
		
        $vista = $this->load->view('main/staff/search',$data,TRUE);
		getTemplate($vista);
    }
}