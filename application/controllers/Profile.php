<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas']);
		$this->load->model(['Users_m','UserInfo_m','Sector_m','Puesto_m']);
    }

	public function index()
	{
        $id = $this->session->userdata('id');
        $data['userInfo'] = $this->UserInfo_m->get($id);
		$data['sectores'] = $this->Sector_m->get();
		$data['puestos'] = $this->Puesto_m->get();

        $vista = $this->load->view('main/profile/index',$data,TRUE);
		getTemplate($vista);
    }

    public function edit($id = NULL){

		if ($id) {
			$data['userInfo'] = $this->UserInfo_m->get($id);
			$data['sectores'] = $this->Sector_m->get();
			$data['puestos'] = $this->Puesto_m->get();
		}

		$rules = $this->UserInfo_m->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			//$userInfo_data = $this->Perfil_m->array_from_post(['nombre']);
			//$nombre = $this->input->post('nombre');
            
            //$this->UserInfo_m->save($userInfo_data,$id);

            if($id){
                $this->session->set_flashdata('msj','Se edito con exito.');
			}
			
            redirect('profile');
		}
		
		$vista = $this->load->view('main/profile/index',$data,TRUE);
		getTemplate($vista);
	}

}