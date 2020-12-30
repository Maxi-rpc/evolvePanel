<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model(['Users','UserInfo','Sector','Teams','Puestos']);
        $this->load->helper(['vistas','auth/rules_general','form']);
        $this->load->library(['form_validation', 'email']);
    }

	public function index()
	{
        $id = $this->session->id_usuario;
        $user = $this->UserInfo->getuserInfo($id);
        $sectores = $this->Sector->getSectorAll();
        $teams = $this->Teams->getTeam();
        $puestos = $this->Puestos->getPuesto();

        $vista = $this->load->view('main/perfil', ['user'=> $user, 'sectores' => $sectores, 'teams' => $teams, 'puestos' => $puestos], TRUE);
        getTemplate($vista);
    }
    
    public function updatePerfil(){
        
        $rules = get_UserInfo_Rules();
        
        $nombre = $this->input->post('firstname');
        $apellido = $this->input->post('lastname');
        $nickname = $this->input->post('nickname');
        $email = $this->input->post('email');
		
        $id = $_SESSION['id_usuario'];

        $this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == false) {
			$this->load->view('dashboard');
		} else {
			$userInfo = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'nickname' => $nickname,
                'email' => $email,	
                'sector' => $sector,
                'puesto' => $puesto,			
            ];
    
            $user = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'email' => $email,	
            ];

        $this->Users->update($id,$user);


        $this->UserInfo->update($id,$userInfo);


        redirect('perfil');
    }
}