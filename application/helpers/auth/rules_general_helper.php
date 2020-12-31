<?php
function get_UserInfo_Rules(){
	return [
        [
            'field' => 'firstname',
            'label' => 'Nombre',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
                'required' => 'El campo %s no puede ir vacío',
            ],
        ],

        [
            'field' => 'lastname',
            'label' => 'Apellido',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
                'required' => 'El campo %s no puede ir vacío',
            ],
        ],

        [
            'field' => 'nickname',
            'label' => 'Nickname',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
                'required' => 'El campo %s no puede ir vacío',
            ],
        ],

    ];

}
