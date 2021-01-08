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

	public $location = 'Adminarea-Team'; // Locacion del controlador

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
        $teams = $this->Teams_m->get();
        $vista = $this->load->view('main/adminarea/team/index',['datosSql'=>$datosSql,'teams'=>$teams],TRUE);
		getTemplate($vista,$this->location);
    }

    public function edit($id = NULL){

		if ($id) {
			$data['team'] = $this->Teams_m->get($id);
			
		  } else {
			$data['team'] = $this->Teams_m->get_new();
		  }

		$rules = $this->Teams_m->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$team_data = $this->Teams_m->array_from_post(['nombre']);
			//$nombre = $this->input->post('nombre');
            
            $this->Teams_m->save($team_data,$id);

            if($id){
                $this->session->set_flashdata('msj','Se edito con exito.');
            }else{
				$this->session->set_flashdata('msj','Se creo con exito.');
            }
            redirect('team');
		}
		
		$vista = $this->load->view('main/adminarea/team/edit',$data,TRUE);
		getTemplate($vista,$this->location);
	}

	public function delete($id = NULL)
	{
		if($this->Teams_m->delete($id) == FALSE){
			$this->session->set_flashdata('msj','No se pudo eliminar.');
		} else {
			$this->session->set_flashdata('msj','Se elimino con exito.');
		}
        redirect('team');
    }
}