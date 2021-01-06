<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams_m extends MY_Model {

  protected $_table_name = 'teams';

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
    $team = new stdClass(); //clase vacia
    $team->nombre = '';
    $team->id = 0;

    return $team;
  }

}
