<?php
function getTemplate($view,$data){
	/*$data = array(
		'header' => $this->load->view('includes/header','',TRUE),
		'navbar' => $this->load->view('includes/navbar','',TRUE),
		'content' => $view,
		'footer' => $this->load->view('includes/footer','',TRUE),				
    );*/

    //$this->load->view($view,$data);
    
    $this->load->view('includes/header','',TRUE),
	$this->load->view('includes/navbar','',TRUE),
	$this->load->view($view,$data,TRUE),
    $this->load->view('includes/footer','',TRUE),	
}