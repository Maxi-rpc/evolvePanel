<?php

class UserInfo_m extends CI_Model {
    
    protected $_table_name = 'usuario_info';

    function __construct()
	{
		$this->load->database();
	}

	public function create($userInfo)
	{
		$this->db->trans_start();
		$this->db->insert($_table_name, $userInfo);
		$user_info['id'] = $this->db->insert_id();
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
		$this->db->update($_table_name,$data);
	}

	public function get($id = NULL)
	{
		if($id != NULL){
			$sql = $this->db->get_where($_table_name,array('id_usuario',$id));
            $method = 'row_array';
        } else {
			$sql = $this->db->get_where($_table_name);
			$method = 'result';
        }

		return $sql->$method();
	}
}