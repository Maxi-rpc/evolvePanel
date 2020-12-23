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

function getDatos(){

  $CI = &get_instance();

  $sql = $CI->db->get_where('usuarios');
  $cUser = $sql->num_rows();

  $sql2 = $CI->db->get_where('teams');
  $cTeams = $sql2->num_rows();

  $sql3 = $CI->db->get_where('usuario_info',array('sector' => 'player'));
  $cPlayer = $sql3->num_rows();

  $sql4 = $CI->db->get_where('usuario_info',array('sector' => 'staff'));
  $cStaff = $sql4->num_rows();

  $datos = array(
      'cantUser' => $cUser,
      'cantTeams' => $cTeams,
      'cantPlayers' => $cPlayer,
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