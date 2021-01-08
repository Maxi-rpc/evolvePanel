<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminarea extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('vistas');
	}

	public function index()
	{
		$datosSql = getCantidadDatosSQL();
        $vista = $this->load->view('main/adminarea/adminarea',['datosSql'=>$datosSql],TRUE);
		$location = 'Adminarea';
		getTemplate($vista,$location);
    }

}