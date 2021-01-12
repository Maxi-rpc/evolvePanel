<?php

class Redes_m extends MY_Model {
    
    protected $_table_name = 'redes';

	public $rules = array(
		'red_nombre' => array(
			'field' => 'red_nombre',
			'label' => 'red_nombre',
			'rules' => 'trim|required',
			'errors' => [
				'required' => 'El %s es requerido',
				'required' => 'El campo %s no puede ir vacío',
				],
            ),
        'red_user' => array(
            'field' => 'red_user',
            'label' => 'red_user',
            'rules' => 'trim|required',
            'errors' => [
                'required' => 'El %s es requerido',
                'required' => 'El campo %s no puede ir vacío',
                ],
            ),
	);
}