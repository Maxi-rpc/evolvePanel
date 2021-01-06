<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Puesto extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas']);
		$this->load->model(['Puesto_m']);
    }

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
        $puesto = $this->Puesto_m->get();
        $vista = $this->load->view('main/adminarea/team/index',['datosSql'=>$datosSql,'puesto'=>$puesto],TRUE);
		getTemplate($vista);
    }

    public function edit($id = NULL){

		if ($id) {
			$data['puesto'] = $this->Puesto_m->get($id);
			
		  } else {
			$data['puesto'] = $this->Puesto_m->get_new();
		  }

		$rules = $this->Puesto_m->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$puesto_data = $this->Puesto_m->array_from_post(['nombre']);
			//$nombre = $this->input->post('nombre');
            
            $this->Puesto_m->save($puesto_data,$id);

            if($id){
                $this->session->set_flashdata('msj','Se edito con exito.');
            }else{
				$this->session->set_flashdata('msj','Se creo con exito.');
            }
            redirect('puesto');
		}
		
		$vista = $this->load->view('main/adminarea/puesto/edit',$data,TRUE);
		getTemplate($vista);
	}

	public function delete($id = NULL)
	{
		if($this->Puesto_m->delete($id) == FALSE){
			$this->session->set_flashdata('msj','No se pudo eliminar.');
		} else {
			$this->session->set_flashdata('msj','Se elimino con exito.');
		}
        redirect('puesto');
    }
}