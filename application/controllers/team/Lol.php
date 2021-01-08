<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lol extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->helper('vistas');
        $this->load->model(['Partidas_m','Teams_m']);
	}

	public $location = 'Team-League of Legends'; // Locacion del controlador

	public function index()
	{
        $data['partidas'] = $this->Partidas_m->get();
		$data['teams'] = $this->Teams_m->get();
        
        $vista = $this->load->view('main/team/lol/index',$data,TRUE);
		getTemplate($vista,$this->location);
    }

	public function search($id = NULL)
	{
		$data['partidas'] = $this->Partidas_m->get();
		$data['teams'] = $this->Teams_m->get();

		//Buscamos los datos para mostrar en Search
		$partidaSearch = $this->Partidas_m->get($id);
		$teams = $this->Teams_m->get($partidaSearch->id_teams);

		$data['userSearch'] = array(
			'id_partida' => $partidaSearch->id_partida,
			'nombre' => $partidaSearch->nombre,
			'fecha' => $partidaSearch->fecha,
			'resultado' => $partidaSearch->resultado,
		);
		
        $vista = $this->load->view('main/team/lol/index',$data,TRUE);
		getTemplate($vista,$this->location);
    }
}