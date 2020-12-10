<?php

class Login_model extends CI_Model {
    
    public function login(){

    }

    public function crearUser(){
        $array=array(
            "name" =>"admin",
            "email"=>"maxirpc2607@gmail.com",
            "password"=>"admin1234"
        );
        $this->db->insert("users",$array);
    }
}