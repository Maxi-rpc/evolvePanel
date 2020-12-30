<?php

class UserInfo extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function create($user,$id=0)
	{
		
		if($id==0){
			$sql = $this->getuserID($user['email']);
			$id = $sql['id_usuario'];
		}		

		$userInfo = [
			'nombre' => $user['nombre'],
			'apellido' => $user['apellido'],
			'email' => $user['email'],	
		];

		$this->db->trans_start();
		$this->db->insert('usuario_info', $userInfo);
		$user_info['id_usuario'] = $id;
		$user_info['id'] = $this->db->insert_id();
		$this->db->trans_complete();

		if ($this->db->trans_status() === false) {
			return false;
		} else {
			return true;
		}
	}

	public function update($id,$data)
	{
		$this->db->where('id_usuario',$id);
		$this->db->update('usuario_info',$data);
	}

	public function getuserInfo($id = NULL)
	{
		if($id != NULL){
			$sql = $this->db->get_where('usuario_info',array('id_usuario',$id));
			$method = 'row_array';
		} else {
			$sql = $this->db->get_where('usuario_info');
			$method = 'result';
		}
		return $sql->$method();
	}

	public function getuserID($email)
	{
		$sql = $this->db->get_where('usuarios',array('email',$email));
		return $sql->row_array();
	}
}