<?php

class UsersInfo extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function create($user,$id)
	{
		$this->db->trans_start();
		$this->db->insert('usuario_info', $user);
		$user_info['id_usuario'] = $id;
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

	public function getuserInfoall()
	{
		$sql = $this->db->get_where('usuario_info');
		return $sql->result();
		
	}

	public function getuserInfo($id)
	{
		$sql = $this->db->get_where('usuario_info',array('id_usuario',$id));
		return $sql->row_array();
	}
}