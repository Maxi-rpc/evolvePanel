<?php
function getTemplate($view){
	$data = array(
		'header' => $this->load->view('includes/header','',TRUE),
        'navbar' => $this->load->view('includes/navbar','',TRUE),
        'aside' => $this->load->view('includes/aside','',TRUE),
		'content' => $view,
		'footer' => $this->load->view('includes/footer','',TRUE),				
    );

    $this->load->view('dashboard',$data);
}