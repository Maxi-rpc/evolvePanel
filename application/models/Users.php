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

	public function getuserall()
	{
		$this->db->select("*");
		$this->db->from("usuarios");

		$query=$this->get();
		if($query->num_rows()>0){
			return $query->result();
		} else {
			return NULL;
		}
	}

	public function getuser($email)
	{
		/*$this->db->select("*");
		$this->db->from("usuarios");
		$this->db->where("email",$email);
		*/
		$sql = $this->db->get_where('usuarios',array('email',$email));
		return $sql->row_array();
		/*
		$query=$this->get();
		if($query->num_rows()>0){
			return $query->result();
		} else {
			return NULL;
		}*/
	}
}