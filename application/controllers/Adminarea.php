<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminarea extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['vistas','auth/rules_general']);
		$this->load->model('Users');
	}

	public function index()
	{
        $datosSql = getCantidadDatosSQL();
        $vista = $this->load->view('main/adminarea/adminarea',['datosSql'=>$datosSql],TRUE);
		getTemplate($vista);
    }

}