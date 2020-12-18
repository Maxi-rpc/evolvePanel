<?php

class Perfiles extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function create($perfil)
	{
		$this->db->trans_start();
		$this->db->insert('perfiles', $perfil);
		$perfil_info['id_perfil'] = $this->db->insert_id();
		$this->db->trans_complete();

		if ($this->db->trans_status() === false) {
			return false;
		} else {
			return true;
		}
	}

	public function getPerfilAll()
	{
		$sql = $this->db->get_where('perfiles');
		return $sql->result();
	}

	public function getPerfil($id)
	{
		$sql = $this->db->get_where('perfiles',array('id_perfil',$id));
		return $sql->row_array();
	}
}