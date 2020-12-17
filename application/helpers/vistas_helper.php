<?php

function getTemplate($view){
    $CI = &get_instance();

	$data = array(
		'header' => $this->load->view('includes/header','',TRUE),
        'navbar' => $this->load->view('includes/navbar','',TRUE),
        'aside' => $this->load->view('includes/aside','',TRUE),
		'content' => $view,
		'footer' => $this->load->view('includes/footer','',TRUE),				
    );

    return $CI->load->view('dashboard',$data);
}

/*
FUNCION ORIGINAL

if(!function_exists('view_loader')){

  function view_loader($view, $vars=array(), $output = false){
    $CI = &get_instance();
    return $CI->load->view($view, $vars, $output);
  }
}

*/