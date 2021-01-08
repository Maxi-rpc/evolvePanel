<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lol extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->helper('vistas');
        $this->load->model(['UserInfo_m','Sector_m','Puesto_m']);
	}

	public $location = 'League of Legends'; // Locacion del controlador

	public function index()
	{
        $data['userInfo'] = $this->UserInfo_m->get();
		$data['sectores'] = $this->Sector_m->get();
        $data['puestos'] = $this->Puesto_m->get();
        
        $vista = $this->load->view('main/team/lol/index',$data,TRUE);
		getTemplate($vista,$this->location);
    }

	public function search($id = NULL)
	{
		$data['userInfo'] = $this->UserInfo_m->get();
		$data['sectores'] = $this->Sector_m->get();
		$data['puestos'] = $this->Puesto_m->get();

		//Buscamos los datos para mostrar en Search
		$userSearch = $this->UserInfo_m->get($id);
		$sector = $this->Sector_m->get($userSearch->sector);
		$puesto = $this->Puesto_m->get($userSearch->puesto);

		$data['userSearch'] = array(
			'nombre' => $userSearch->nombre,
			'apellido' => $userSearch->apellido,
			'nickname' => $userSearch->nickname,
			'email' => $userSearch->email,
			'sector' => $sector->nombre,
			'puesto' => $puesto->nombre,
		);
		
        $vista = $this->load->view('main/team/lol/index',$data,TRUE);
		getTemplate($vista,$this->location);
    }
}