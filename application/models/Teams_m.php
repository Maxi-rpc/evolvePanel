<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams_m extends MY_Model {

  protected $_table_name = 'teams';

  public $rules = array(
    'nombre' => array(
      'field' => 'nombre',
      'label' => 'Nombre',
      'rules' => 'trim|required'
      'errors' => array(
        'required' => 'El %s es requerido',
        'required' => 'El campo %s no puede ir vacío',
      ),
    ),
  );


}
