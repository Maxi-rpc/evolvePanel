<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_m extends MY_Model {

  protected $_table_name = 'perfil';

  public $rules = array(
    'nombre' => array(
      'field' => 'nombre',
      'label' => 'Nombre',
      'rules' => 'trim|required',
      'errors' => [
        'required' => 'El %s es requerido',
        'required' => 'El campo %s no puede ir vacío',
        ],
    ),
  );

  public function get_new()
  {
    $perfil = new stdClass(); //clase vacia
    $perfil->nombre = '';
    $perfil->id = 0;

    return $perfil;
  }

}
