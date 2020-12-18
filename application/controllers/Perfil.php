<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model(['Users', 'Perfiles' , 'UserInfo','Sector']);
        $this->load->helper('vistas');
    }
    
	public function index()
	{
        $id = $this->session->id_usuario;
        $data = $this->UserInfo->getuserInfo($id);
        $perfiles = $this->Perfiles->getPerfilAll();
        $sector = $this->Sector->getSectorAll();
        $datos = getDatos();

        $info = [
            'data' => $data,
            'perfiles' => $perfiles,
            'sector' => $sector,
            'datos' => $datos,
        ];

        $vista = $this->load->view('main/perfil', $info, true);
        getTemplate($vista);
    }
    
    public function updatePerfil(){
        
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