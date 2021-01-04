<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas','auth/rules_general']);
		$this->load->model('Users');
	}

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
        $users = $this->Users->get();
        $vista = $this->load->view('main/adminarea/user/index',['datosSql'=>$datosSql,'users'=>$users],TRUE);
		getTemplate($vista);
    }

    public function edit($id = NULL){
        
        $nombre = $this->input->post('firstname');
		$apellido = $this->input->post('lastname');
		$email = $this->input->post('email');
		$perfil = $this->input->post('perfil');
		$password = $this->input->post('password');
		$password_c = $this->input->post('password_c');

		$rules = get_UserCreate_Rules();

		///Encriptamos la contrsaeña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, [
			'cost' => 4,
		]);

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$user = [
				'nombre' => $nombre,
				'apellido' => $apellido,
				'email' => $email,				
				'password' => $password_segura, ///Enviamos la contraseña encripatada a la BD
				'perfil' => $perfil,
				'estado' => 1,
			];

			if (!$this->Users->save($user)) {
				$data['msj'] =
					'Ocurrio un error al ingresar los datos, intente nuevamente';
			} else {
                $buscarID = $this->Users->get($user['email']);
                $user['id_usuario'] = $buscarID['id_usuario'];
                $this->UserInfo->create($user); // Creamos el user en Usuario_info
                $data['msj'] =
					'Se creo registro';
            }
            $vista = $this->load->view('main/adminarea/user/index', $data,TRUE);
            getTemplate($vista);
		}

		$vista = $this->load->view('main/adminarea/user/edit');
		getTemplate($vista);
    }
}