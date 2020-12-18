<?php

class Users extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function create($user)
	{
		$this->db->trans_start();
		$this->db->insert('usuarios', $user);
		$user_info['id_usuario'] = $this->db->insert_id();
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
		$this->db->update('usuarios',$data);
	}

	public function getuserall()
	{
		$sql = $this->db->get_where('usuarios');
		return $sql->result();
	}

	public function getuser($email)
	{
		$sql = $this->db->get_where('usuarios',array('email',$email));
		return $sql->row_array();
	}
}