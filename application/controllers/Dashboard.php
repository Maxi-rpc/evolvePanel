<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent::__construct();
	}
	public function index(){
		if($this->session->userdata('is_logged')){
			$vista = $this->load->view('main/home','',TRUE);
			$this->getTemplate($vista);	
		}else{
			redirect('login');
		}
	}
	public function getTemplate($view){
		$data = array(
			'header' => $this->load->view('includes/header','',TRUE),
			'navbar' => $this->load->view('includes/navbar','',TRUE),
			'aside' => $this->load->view('includes/aside','',TRUE),
			'content' => $view,
			'footer' => $this->load->view('includes/footer','',TRUE),					
		);
					
		$this->load->view('dashboard',$data);
	}
}