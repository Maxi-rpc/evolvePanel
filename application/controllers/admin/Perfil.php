<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perfil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas']);
		$this->load->model(['Perfil_m']);
    }
	
	public $location = 'Adminarea-Perfil'; // Locacion del controlador

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
        $perfil = $this->Perfil_m->get();
        $vista = $this->load->view('main/adminarea/perfil/index',['datosSql'=>$datosSql,'perfil'=>$perfil],TRUE);
		getTemplate($vista,$this->location);
    }

    public function edit($id = NULL){

		if ($id) {
			$data['perfil'] = $this->Perfil_m->get($id);
			
		  } else {
			$data['perfil'] = $this->Perfil_m->get_new();
		  }

		$rules = $this->Perfil_m->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$perfil_data = $this->Perfil_m->array_from_post(['nombre']);
			//$nombre = $this->input->post('nombre');
            
            $this->Perfil_m->save($perfil_data,$id);

            if($id){
                $this->session->set_flashdata('msj','Se edito con exito.');
            }else{
				$this->session->set_flashdata('msj','Se creo con exito.');
            }
            redirect('admin/perfil');
		}
		
		$vista = $this->load->view('main/adminarea/perfil/edit',$data,TRUE);
		getTemplate($vista,$this->location);
	}

	public function delete($id = NULL)
	{
		if($this->Perfil_m->delete($id) == FALSE){
			$this->session->set_flashdata('msj','No se pudo eliminar.');
		} else {
			$this->session->set_flashdata('msj','Se elimino con exito.');
		}
        redirect('admin/perfil');
    }
}