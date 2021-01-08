<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partidas_m extends MY_Model {

  protected $_table_name = 'partidas';

  public $rules = array(
    'id_partida' => array(
        'field' => 'id_partida',
        'label' => 'id_partida',
        'rules' => 'trim|required',
        'errors' => [
            'required' => 'El %s es requerido',
            'required' => 'El campo %s no puede ir vacío',
        ],
    ),
    'id_teams' => array(
        'field' => 'id_teams',
        'label' => 'id_teams',
        'rules' => 'trim|required',
        'errors' => [
            'required' => 'El %s es requerido',
            'required' => 'El campo %s no puede ir vacío',
        ],
    ),
    'name' => array(
        'field' => 'name',
        'label' => 'Nombre',
        'rules' => 'trim|required',
        'errors' => [
            'required' => 'El %s es requerido',
            'required' => 'El campo %s no puede ir vacío',
        ],
    ),
    'fecha' => array(
        'field' => 'fecha',
        'label' => 'Fecha',
        'rules' => 'trim|required',
        'errors' => [
            'required' => 'El %s es requerido',
            'required' => 'El campo %s no puede ir vacío',
        ],
    ), 
    'resultado' => array(
        'field' => 'resultado',
        'label' => 'Resultado',
        'rules' => 'trim|required',
        'errors' => [
            'required' => 'El %s es requerido',
            'required' => 'El campo %s no puede ir vacío',
        ],
    ),
  );

  public function get_new()
  {
    $partida = new stdClass(); //clase vacia
    $partida->id = 0;
    $partida->id_partida = 0;
    $partida->id_teams = 0;
    $partida->nombre = '';
    $partida->fecha = '';
    $partida->resultado = '';
    
    return $partida;
  }

}