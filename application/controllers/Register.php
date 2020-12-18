<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users');
		$this->load->library(['form_validation', 'email']);
	}

	public function index()
	{
		$this->load->view('register');
		$query = $this->db->get('usuarios');
	}

	public function create()
	{
		$nombre = $this->input->post('firstname');
		$apellido = $this->input->post('lastname');
		$email = $this->input->post('email');
		$perfil = $this->input->post('perfil');
		$password = $this->input->post('password');
		$password_c = $this->input->post('password_c');

		$config = [
			[
				'field' => 'firstname',
				'label' => 'Nombre',
				'rules' => 'required',
				'errors' => [
					'required' => 'El campo %s no puede ir vacío',
				],
			],
			[
				'field' => 'lastname',
				'label' => 'Apellido',
				'rules' => 'required',
				'errors' => [
					'required' => 'El campo %s no puede ir vacío',
				],
			],
			[
				'field' => 'email',
				'label' => 'email',
				'rules' => 'required|valid_email|is_unique[usuarios.email]',
				'errors' => [
					'required' => 'El campo %s no puede ir vacío',
					'valid_email' => 'Ingrese un %s válido',
					'is_unique' => 'El %s ingresado ya se encuentra registrado',
				],
			],
			[
				'field' => 'perfil',
				'label' => 'Perfil',
				'rules' => 'required|numeric',
				'errors' => [
					'required' => 'El campo %s no puede ir vacío',
					'numeric' => 'Ingrese solo números',
				],
			],
			[
				'field' => 'password',
				'label' => 'contraseña',
				'rules' => 'required',
				'errors' => [
					'required' => 'El campo % no puede ir vacío',
				],
			],
			[
				'field' => 'password_c',
				'label' => 'confirmación de contraseña',
				'rules' => 'required|matches[password]',
				'errors' => [
					'matches' => 'La %s no es igual a la contraseña',
				],
			],
		];

		///Encriptamos la contrsaeña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, [
			'cost' => 4,
		]);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$user = [
				'nombre' => $nombre,
				'apellido' => $apellido,
				'email' => $email,				
				'password' => $password_segura, ///Enviamos la contraseña encripatada a la BD
				'perfil' => $perfil,
				'estado' => 1,
			];

			if (!$this->Users->create($user)) {
				$data['msg'] =
					'Ocurrio un error al ingresar los datos, intente nuevamente';
				$this->load->view('register', $data);
            }
		}
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
			'sector' => $nombre,
		];

		$this->Sector->create($sector);
	}
}
