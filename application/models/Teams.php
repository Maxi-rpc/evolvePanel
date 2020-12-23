<?php

class Teams extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function create($team)
	{
		$this->db->trans_start();
		$this->db->insert('teams', $team);
		$perfil_info['id_team'] = $this->db->insert_id();
		$this->db->trans_complete();

		if ($this->db->trans_status() === false) {
			return false;
		} else {
			return true;
		}
	}

	public function getTeamsAll()
	{
		$sql = $this->db->get_where('teams');
		return $sql->result();
	}

	public function getTeam($id)
	{
		$sql = $this->db->get_where('teams',array('id_team',$id));
		return $sql->row_array();
	}
}