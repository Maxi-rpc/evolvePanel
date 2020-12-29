<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model(['Users','UserInfo','Sector','Teams','Puestos']);
        $this->load->helper(['vistas','auth/rules_general']);
    }

	public function index()
	{
        $id = $this->session->id_usuario;
        $user = $this->UserInfo->getuserInfo($id);
        $sectores = $this->Sector->getSectorAll();
        $teams = $this->Teams->getTeam();
        $puestos = $this->Puestos->getPuesto();

        $vista = $this->load->view('main/perfil', ['user'=> $user, 'sector' => $sectores, 'team' => $teams, 'puestos' => $puestos], TRUE);
        getTemplate($vista);
    }
    
    public function updatePerfil(){
        
        $rules = get_UserInfo_Rules();
        
        $nombre = $this->input->post('firstname');
        $apellido = $this->input->post('lastname');
        $nickname = $this->input->post('nickname');
        $email = $this->input->post('email');
        $sector = $this->input->post('sector');
        $puesto = $this->input->post('puesto');
		
        $id = $_SESSION['id_usuario'];

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


        $vista = $this->load->view('main/perfil', '', true);
        getTemplate($vista);
    }
}