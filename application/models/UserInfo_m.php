<?php

class UserInfo_m extends MY_Model {
    
    protected $_table_name = 'usuario_info';

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
		'apellido' => array(
			'field' => 'apellido',
			'label' => 'Apellido',
			'rules' => 'trim|required',
			'errors' => [
				'required' => 'El %s es requerido',
				'required' => 'El campo %s no puede ir vacío',
				],
            ),
        'nickname' => array(
            'field' => 'nickname',
            'label' => 'Nickname',
            'rules' => 'trim|required',
            'errors' => [
                'required' => 'El %s es requerido',
                'required' => 'El campo %s no puede ir vacío',
                ],
            ),
	);
}