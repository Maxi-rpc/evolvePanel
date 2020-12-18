<?php

function getTemplate($view){
    $CI = &get_instance();

	$data = array(
		'header' => $CI->load->view('includes/header','',TRUE),
    'navbar' => $CI->load->view('includes/navbar','',TRUE),
    'aside' => $CI->load->view('includes/aside','',TRUE),
		'content' => $view,
		'footer' => $CI->load->view('includes/footer','',TRUE),			
    );

    return $CI->load->view('main/dashboard',$data);
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
function getDatos(){

  $CI = &get_instance();

  $sql = $this->db->get_where('usuarios');
  $numero = $sql->num_rows();

  $datos = array(
      'cantUser' => $numero,
  );

  return $datos;
}

