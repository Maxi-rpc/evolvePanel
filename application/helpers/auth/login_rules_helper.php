<?php
function getLoginRules(){
	return array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim',
			'errors' => [
				'required' => 'El %s es requerido',
			],
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|trim',
			'errors' => [
				'required' => 'El %s es requerido',
			],
		),
	);
}
