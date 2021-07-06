<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

        public function __construct(){
		parent::__construct();
	} 

        public function index()
	{
                $data["title"] = 'Home';
                $data["subview"] = 'main/partidas';
                $this->load->view('_template',$data);
	}
}