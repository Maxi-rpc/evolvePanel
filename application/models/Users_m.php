<?php

class Users_m extends MY_Model {

	protected $_table_name = 'usuarios';

	public $rules = array(
		'firstname' => array(
			'field' => 'firstname',
			'label' => 'Nombre',
			'rules' => 'trim|required',
			'errors' => [
				'required' => 'El %s es requerido',
				'required' => 'El campo %s no puede ir vacío',
				],
			),
		'lastname' => array(
			'field' => 'lastname',
			'label' => 'Apellido',
			'rules' => 'trim|required',
			'errors' => [
				'required' => 'El %s es requerido',
				'required' => 'El campo %s no puede ir vacío',
				],
			),
		'email' => array(
			'field' => 'email',
			'label' => 'email',
			'rules' => 'trim|required',
			'errors' => [
				'required' => 'El %s es requerido',
				'required' => 'El campo %s no puede ir vacío',
				'valid_email' => 'Ingrese un %s válido',
				'is_unique' => 'El %s ingresado ya se encuentra registrado',
				],
			),
		'perfil' => array(
			'field' => 'perfil',
			'label' => 'perfil',
			'rules' => 'trim|required',
			'errors' => [
				'required' => 'El %s es requerido',
				'required' => 'El campo %s no puede ir vacío',
				'numeric' => 'Ingrese solo números',
				],
			),
		'password' => array(
			'field' => 'password',
			'label' => 'contraseña',
			'rules' => 'trim|required',
			'errors' => [
				'required' => 'El campo %s no puede ir vacío',
				],
			),
		'password_c' => array(
			'field' => 'password_c',
			'label' => 'confirmación de contraseña',
			'rules' => 'trim|required',
			'errors' => [
				'matches' => 'La %s no es igual a la contraseña',
				],
			),
	);

	public function get_new()
	{
		$user = new stdClass(); //clase vacia
		$user->nombre = '';
		$user->apellido = '';
		$user->email = '';
		$user->password = '';
		$user->perfil = 0;
		$user->estado = 0;
		$user->is_logged = 0;

		return $user;
	}

	public function get_byEmail($email = NULL)
	{
		if($email != NULL){
			$sql = $this->db->get_where('usuarios',array('email',$email));
            $method = 'row_array';
        } else {
			$sql = $this->db->get_where('usuarios');
			$method = 'result';
        }

		return $sql->$method();
	}
}