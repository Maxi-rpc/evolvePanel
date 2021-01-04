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

function get_UserCreate_Rules(){
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
            'field' => 'email',
            'label' => 'email',
            'rules' => 'required|trim',
            'errors' => [
                'required' => 'El campo %s no puede ir vacío',
				'valid_email' => 'Ingrese un %s válido',
				'is_unique' => 'El %s ingresado ya se encuentra registrado',
            ],
        ],

        [
            'field' => 'perfil',
            'label' => 'Perfil',
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'El campo %s no puede ir vacío',
                'numeric' => 'Ingrese solo números',
            ],
        ],

        [
            'field' => 'password',
            'label' => 'contraseña',
            'rules' => 'required',
            'errors' => [
                'required' => 'El campo % no puede ir vacío',
            ],
        ],

        [
            'field' => 'password_c',
            'label' => 'confirmación de contraseña',
            'rules' => 'required|matches[password]',
            'errors' => [
                'matches' => 'La %s no es igual a la contraseña',
            ],
        ],
    ];
}
