<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puesto_m extends MY_Model {

  protected $_table_name = 'puesto';

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
    $puesto = new stdClass(); //clase vacia
    $puesto->nombre = '';
    $puesto->id = 0;

    return $puesto;
  }

}
