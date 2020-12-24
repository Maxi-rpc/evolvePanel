<?php

class MyModel extends CI_Model
{
    protected $_table_name = '';
    protected $_primary_key = 'id';

    public function get($id = NULL, $single = FALSE)
    {
        if($id != NULL){
            $this->db->where($this->$_primary_key, $id);
            $method = 'row';
        } elseif($single == TRUE){
            $method = 'row';
        } else {
            $method = 'result';
        }

        return $this->db->get($this->$_table_name)->$method();
    }

}