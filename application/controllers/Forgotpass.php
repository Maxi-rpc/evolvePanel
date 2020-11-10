<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpass extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('auth/forgotpass');
	}
}