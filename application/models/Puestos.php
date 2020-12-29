<?php

class Puestos extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function create($puesto)
	{
		$this->db->trans_start();
		$this->db->insert('puesto', $puesto);
		$puesto_info['id_team'] = $this->db->insert_id();
		$this->db->trans_complete();

		if ($this->db->trans_status() === false) {
			return false;
		} else {
			return true;
		}
	}

	public function getPuesto($id = NULL)
	{
		if($id != NULL){
			$sql = $this->db->get_where('puesto',array('id_puesto',$id));
			$method = 'row_array';
		} else {
			$sql = $this->db->get_where('teams');
			$method = 'result';
		}
		return $sql->$method();
	}
}