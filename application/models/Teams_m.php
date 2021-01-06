<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams_m extends MY_Model {

  protected $_table_name = 'teams';

  public $rules = array(
    'name' => array(
      'field' => 'name',
      'label' => 'Name',
      'rules' => 'trim|required',
      'errors' => [
        'required' => 'El %s es requerido',
        'required' => 'El campo %s no puede ir vacío',
        ],
    ),
  );


}
