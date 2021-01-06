<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sector_m extends MY_Model {

  protected $_table_name = 'sector';

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
    $sector = new stdClass(); //clase vacia
    $sector->nombre = '';
    $sector->id = 0;

    return $sector;
  }

}
