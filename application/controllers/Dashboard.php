<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('vistas');
	}
	public function index(){
		if($this->session->userdata('is_logged')){
			$vista = $this->load->view('main/home','',TRUE);
			getTemplate($vista);
		}else{
			redirect('login');
		}
	}
}