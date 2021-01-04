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
			$this->db->insert('usuarios', $data);
			$data['id_usuario'] = $this->db->insert_id();
			$this->db->trans_complete();
			if ($this->db->trans_status() === false) {
				return false;
			} else {
				return true;
			}
		} else {
			$this->db->where('id_usuario',$id);
			$this->db->update('usuarios',$data);
		}
	}

	public function get($email = NULL)
	{
		if($email != NULL){
			$sql = $this->db->get_where('usuarios',array('email',$email));
            $method = 'row_array';
        } else {
			$sql = $this->db->get_where('usuarios');
			$method = 'result';
        }

		return $sql->$method();
	}
}