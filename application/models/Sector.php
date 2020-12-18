<?php

class Sector extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function create($sector)
	{
		$this->db->trans_start();
		$this->db->insert('sector', $sector);
		$perfil_info['id_sector'] = $this->db->insert_id();
		$this->db->trans_complete();

		if ($this->db->trans_status() === false) {
			return false;
		} else {
			return true;
		}
	}

	public function getSectorAll()
	{
		$sql = $this->db->get_where('sector');
		return $sql->result();
	}

	public function getSector($id)
	{
		$sql = $this->db->get_where('sector',array('id_sector',$id));
		return $sql->row_array();
	}
}