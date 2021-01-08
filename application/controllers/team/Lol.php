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

		$data['partidaSearch'] = array(
			'id_partida' => $partidaSearch->id_partida,
			'nombre' => $partidaSearch->nombre,
			'fecha' => $partidaSearch->fecha,
			'resultado' => $partidaSearch->resultado,
		);
		
        $vista = $this->load->view('main/team/lol/search',$data,TRUE);
		getTemplate($vista,$this->location);
    }

    public function edit($id = NULL){

		if ($id) {
			$data['partidas'] = $this->Partidas_m->get($id);
			
		  } else {
			$data['partidas'] = $this->Partidas_m->get_new();
		  }

		$rules = $this->Partidas_m->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$partida_data = $this->Partidas_m->array_from_post(['nombre']);
			
            
            $this->Partidas_m->save($partida_data,$id);

            if($id){
                $this->session->set_flashdata('msj','Se edito con exito.');
            }else{
				$this->session->set_flashdata('msj','Se creo con exito.');
            }
            redirect('team/lol');
		}
		
		$vista = $this->load->view('main/team/lol/edit',$data,TRUE);
		getTemplate($vista,$this->location);
	}

	public function delete($id = NULL)
	{
		if($this->Partidas_m->delete($id) == FALSE){
			$this->session->set_flashdata('msj','No se pudo eliminar.');
		} else {
			$this->session->set_flashdata('msj','Se elimino con exito.');
		}
        redirect('team/lol');
    }
}