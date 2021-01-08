<?php

function getTemplate($view,$location = NULL){
    $CI = &get_instance();

	$data = array(
		'head' => $CI->load->view('includes/head','',TRUE),
    'navbar' => $CI->load->view('includes/navbar','',TRUE),
    'aside' => $CI->load->view('includes/aside','',TRUE),
    'preContent' => $CI->load->view('includes/preContent',array('location'=>$location),TRUE),
    'content' => $view,
    'afterContent' => $CI->load->view('includes/afterContent','',TRUE),
		'footer' => $CI->load->view('includes/footer','',TRUE),			
    );

    return $CI->load->view('main/dashboard',$data);
}

function getCantidadDatosSQL(){

  $CI = &get_instance();

  $sql_Usuario = $CI->db->get_where('usuarios');
  $cUser = $sql_Usuario->num_rows();

  $sql_Uinfo = $CI->db->get_where('usuario_info');
  $cUserInfo = $sql_Uinfo->num_rows();

  $sql_teams = $CI->db->get_where('teams');
  $cTeams = $sql_teams->num_rows();

  $sql_sector = $CI->db->get_where('sector');
  $cSector = $sql_sector->num_rows();

  $sql_puesto = $CI->db->get_where('puesto');
  $cPuesto = $sql_puesto->num_rows();

  $sql_perfiles = $CI->db->get_where('perfil');
  $cPerfiles = $sql_perfiles->num_rows();

  $staff = 1;
  $sql_staff = $CI->db->get_where('usuario_info',array('sector' => $staff));
  $cStaff = $sql_staff->num_rows();

  $player = 2;
  $sql_players = $CI->db->get_where('usuario_info',array('sector' => $player));
  $cPlayer = $sql_players->num_rows();

  $datos = array(
      'cantUser' => $cUser,
      'cantUserInfo' => $cUserInfo,
      'cantTeams' => $cTeams,
      'cantSector' => $cSector,
      'cantPuesto' => $cPuesto,
      'cantPerfil' => $cPerfiles,
      'cantStaff' => $cStaff,
      'cantPlayer' => $cPlayer,
  );

  return $datos;
}
