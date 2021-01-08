<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sector extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas']);
		$this->load->model(['Sector_m']);
    }

	public $location = 'Adminarea-Sector'; // Locacion del controlador

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
        $sector = $this->Sector_m->get();
        $vista = $this->load->view('main/adminarea/sector/index',['datosSql'=>$datosSql,'sector'=>$sector],TRUE);
		getTemplate($vista,$this->location);
    }

    public function edit($id = NULL){

		if ($id) {
			$data['sector'] = $this->Sector_m->get($id);
			
		  } else {
			$data['sector'] = $this->Sector_m->get_new();
		  }

		$rules = $this->Sector_m->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$sector_data = $this->Sector_m->array_from_post(['nombre']);
			//$nombre = $this->input->post('nombre');
            
            $this->Sector_m->save($sector_data,$id);

            if($id){
                $this->session->set_flashdata('msj','Se edito con exito.');
            }else{
				$this->session->set_flashdata('msj','Se creo con exito.');
            }
            redirect('sector');
		}
		
		$vista = $this->load->view('main/adminarea/sector/edit',$data,TRUE);
		getTemplate($vista,$this->location);
	}

	public function delete($id = NULL)
	{
		if($this->Sector_m->delete($id) == FALSE){
			$this->session->set_flashdata('msj','No se pudo eliminar.');
		} else {
			$this->session->set_flashdata('msj','Se elimino con exito.');
		}
        redirect('sector');
    }
}