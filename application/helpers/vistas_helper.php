<?php

function getTemplate($view){
    $CI = &get_instance();

	$data = array(
		'header' => ('includes/header','',TRUE),
        'navbar' => ('includes/navbar','',TRUE),
        'aside' => ('includes/aside','',TRUE),
		'content' => $view,
		'footer' => ('includes/footer','',TRUE),				
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