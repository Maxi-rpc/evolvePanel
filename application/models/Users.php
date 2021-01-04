<?php

class Users extends CI_Model {
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