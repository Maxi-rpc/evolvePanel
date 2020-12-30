<?php

function getTemplate($view){
    $CI = &get_instance();

	$data = array(
		'head' => $CI->load->view('includes/head','',TRUE),
    'navbar' => $CI->load->view('includes/navbar','',TRUE),
    'aside' => $CI->load->view('includes/aside','',TRUE),
		'content' => $view,
		'footer' => $CI->load->view('includes/footer','',TRUE),			
    );

    return $CI->load->view('main/dashboard',$data);
}

function getCantidadDatosSQL(){

  $CI = &get_instance();

  $sql_Usuario = $CI->db->get_where('usuarios');
  $cUser = $sql_Usuario->num_rows();

  $sql_Uinfo = $CI->db->get_where('usuarios_info');
  $cUserInfo = $sql_Uinfo->num_rows();

  $sql_teams = $CI->db->get_where('teams');
  $cTeams = $sql_teams->num_rows();

  $sql_sector = $CI->db->get_where('sector');
  $cSector = $sql_sector->num_rows();

  $sql_puesto = $CI->db->get_where('puesto');
  $cPuesto = $sql_puesto->num_rows();

  $sql_perfiles = $CI->db->get_where('perfiles');
  $cPerfiles = $sql_perfiles->num_rows();

  $sql_players = $CI->db->get_where('usuario_info',array('sector' => 'player'));
  $cPlayer = $sql_players->num_rows();

  $sql_staff = $CI->db->get_where('usuario_info',array('sector' => 'staff'));
  $cStaff = $sql_staff->num_rows();

  $datos = array(
      'cantUser' => $cUser,
      'cantUserInfo' => $cUserInfo,
      'cantTeams' => $cTeams,
      'cantSector' => $cSector,
      'cantPuesto' => $cPuesto,
      'cantPerfil' => $cPerfiles,
      'cantPlayer' => $cPlayer,
      'cantStaff' => $cStaff,
  );

  return $datos;
}

function mensaje(){

  /*
  if ( condición ) {
    echo "<script>
    $('.toastrDefaultSuccess')(function() {
      toastr.success('Se creo con exito.')
    });
    </script>";
  }
  */
  
  echo "<script>
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.toastrDefaultSuccess')(function() {
      toastr.success('Se creo con exito.')
    });

  });
</script>";

}