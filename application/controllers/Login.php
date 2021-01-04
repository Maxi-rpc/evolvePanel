<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['auth/login_rules','vistas']);
		$this->load->model(['Auth','Users']);
	}

	public function index()
	{
		if($this->session->userdata('is_logged')){
			$vista = $this->load->view('main/home','',TRUE);
			getTemplate($vista);
		}else{
			$this->load->view('auth/login');
		}
	}

	public function validate()
	{
		$this->form_validation->set_error_delimiters('','');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('auth/login');
		} else {
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			if (!($res = $this->Auth->login($email, $pass))) {
				$this->session->set_flashdata('msj','Verifique sus credenciales');
				redirect('login');
			}
			$data = [
				'id_usuario' => $res->id_usuario,
				'nombre' => $res->nombre,
				'apellido' => $res->apellido,
				'email' => $res->email,
				'perfil' => $res->perfil,				
				'is_logged' => TRUE,
			];
			$this->session->set_userdata($data);
			$this->Users->update($data['id_usuario'],$data['is_logged']);
			redirect('dashboard');
		}
	}

	public function logout()
	{
		$data = ['id', 'nombre', 'apellido', 'email', 'perfil', 'is_logged'];
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		
		redirect('login');
	}
}
