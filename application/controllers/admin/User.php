<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas','auth/rules_general']);
		$this->load->model(['Users_m','Perfil_m','UserInfo_m']);
	}

	public $location = 'Adminarea-User'; // Locacion del controlador

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
		$users = $this->Users_m->get();
        $vista = $this->load->view('main/adminarea/user/index',['datosSql'=>$datosSql,'users'=>$users],TRUE);
		getTemplate($vista,$this->location);
    }

    public function edit($id = NULL){
        
		$rules = get_UserCreate_Rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$nombre = $this->input->post('firstname');
			$apellido = $this->input->post('lastname');
			$email = $this->input->post('email');
			$perfil = $this->input->post('perfil');
			$password = $this->input->post('password');
			$password_c = $this->input->post('password_c');

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
			$buscarID = $this->Users_m->save($user);
			if ($buscarID = NULL) {
				$this->session->set_flashdata('msj','Ocurrio un error al ingresar los datos, intente nuevamente');
			} else {
                $user['id_usuario'] = $buscarID;
                $this->UserInfo_m->save($user); // Creamos el user en Usuario_info
				$this->session->set_flashdata('msj','Se creo registro');
            }
            redirect('admin/user');
		}
		$perfil = $this->Perfil_m->get();
		$vista = $this->load->view('main/adminarea/user/edit',['perfil'=>$perfil],TRUE);
		getTemplate($vista,$this->location);
    }
}