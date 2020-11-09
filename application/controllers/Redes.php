<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redes extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('redes');
        $this->load->view('footer');
	}
}