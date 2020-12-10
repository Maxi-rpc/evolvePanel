<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function login()
    {

    }

    public function crearUser()
    {
        $array=array(
            "name"=>"admin",
            "email"=>"maxirpc2607@gmail.com",
            "password"=>"admin1234"
        );
        $this->db->insert("users",$array);
    }

    public function getUser()
    {
        $this->db->select("*");
        $this->db->from("users");

        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    public function updateUser()
    {
        $array=array(
            "name"=>"adminEvolve",
            "email"=>"maxirpc2607@gmail.com",
            "password"=>"admin1234"
        );
        $this->db->where("id",1);
        $this->db->update("users",$array);
    }
}