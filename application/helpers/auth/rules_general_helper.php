<?php
function get_UserInfo_Rules(){
	return [
        [
            'field' => 'firstname',
            'label' => 'Nombre',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
            ],
        ],

        [
            'field' => 'lastname',
            'label' => 'Apellido',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
            ],
        ],

        [
            'field' => 'nickname',
            'label' => 'Nickname',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
            ],
        ],

        [
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim',
			'errors' => [
				'required' => 'El campo %s no puede ir vacío',
				'valid_email' => 'Ingrese un %s válido',
				'is_unique' => 'El %s ingresado ya se encuentra registrado',
			],
		],

        [
            'field' => 'sector',
            'label' => 'Sector',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
            ],
        ],

        [
            'field' => 'team',
            'label' => 'Team',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
            ],
        ],

        [
            'field' => 'puesto',
            'label' => 'Puesto',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El %s es requerido',
            ],
        ],

    ];

}
