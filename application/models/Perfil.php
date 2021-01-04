<?php

class Users extends CI_Model {
	function __construct()
	{
		$this->load->database();
	}

	public function save($data, $id = NULL)
	{
		if($id === NULL){
			$this->db->trans_start();
			$this->db->insert('perfiles', $data);
			$data['id_perfil'] = $this->db->insert_id();
			$this->db->trans_complete();
			if ($this->db->trans_status() === false) {
				return false;
			} else {
				return true;
			}
		} else {
			$this->db->where('id_perfil',$id);
			$this->db->update('perfiles',$data);
		}
	}

	public function get($id = NULL)
	{
		if($email != NULL){
			$sql = $this->db->get_where('perfiles',array('id_perfil',$id));
            $method = 'row_array';
        } else {
			$sql = $this->db->get_where('perfiles');
			$method = 'result';
        }

		return $sql->$method();
	}
}