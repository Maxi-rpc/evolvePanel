<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Users','UserInfo']);
		$this->load->library(['form_validation', 'email']);
		$this->load->helper(['vistas'.'auth/rules_general']);
	}

	public function index()
	{
		$this->load->view('adminarea');
		$query = $this->db->get('usuarios');
	}

    
    public function createAdmin()
	{
		$nombre = "Maximiliano";
		$apellido = "Miranda";
		$email = "maxirpc2607@gmail.com";
		$perfil = 1;
		$password = "AdminEvolve1234";
        ///Encriptamos la contrsaeña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, [
			'cost' => 4,
        ]);
        
        $user = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,				
            'password' => $password_segura, ///Enviamos la contraseña encripatada a la BD
            'perfil' => $perfil,
            'estado' => 1,
        ];

        $this->Users->create($user);
	}

	public function crearPerfil()
	{
		$this->load->model('Perfiles');

		$nombre = $this->input->post('profile');

		$profile = [
			'nombre' => $nombre,
		];

		$this->Perfiles->create($profile);
	}

	public function crearSector()
	{
		$this->load->model('Sector');

		$nombre = $this->input->post('sector');

		$sector = [
			'nombre' => $nombre,
		];

		$this->Sector->create($sector);
	}

	public function crearTeam()
	{
		$this->load->model('Teams');

		$nombre = $this->input->post('team');

		$team = [
			'nombre' => $nombre,
		];

		if($this->Teams->create($team)){
			$view = $this->load->view('main/adminarea');
			redirect('adminarea');
		}
	}
}
