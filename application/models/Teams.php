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
		$team_info['id_team'] = $this->db->insert_id();
		$this->db->trans_complete();

		if ($this->db->trans_status() === false) {
			return false;
		} else {
			return true;
		}
	}

	public function getTeam($id = NULL)
	{
		if($id != NULL){
			$sql = $this->db->get_where('teams',array('id_team',$id));
			$method = 'row_array';
		} else {
			$sql = $this->db->get_where('teams');
			$method = 'result';
		}
		return $sql->$method();
	}
}