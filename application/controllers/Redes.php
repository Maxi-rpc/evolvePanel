<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redes extends CI_Controller {

	public function index()
	{
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('main/redes');
        $this->load->view('includes/footer');
	}
}