<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas']);
		$this->load->model(['Teams_m']);
    }

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
        $teams = $this->Teams_m->get();
        $vista = $this->load->view('main/adminarea/team/index',['datosSql'=>$datosSql,'teams'=>$teams],TRUE);
		getTemplate($vista);
    }

    public function edit($id = NULL){
        
		$rules = $this->Teams_m->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$nombre = $this->input->post('nombre');

			$team_data = [
				'nombre' => $nombre,
            ];
            
            $this->Teams_m->save($team_data,$id);

            if($id){
                $this->session->set_flashdata('msj','Se edito con exito.');
            }else{
				$this->session->set_flashdata('msj','Se creo con exito.');
            }
            redirect('team');
		}
		$teams = $this->Teams_m->get();
		$vista = $this->load->view('main/adminarea/team/edit',['teams'=>$teams],TRUE);
		getTemplate($vista);
    }
}