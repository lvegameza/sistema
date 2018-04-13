<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('marticulos');
		$this->load->model('mgeneros');
		$this->load->model('musuarios');
	}

	
	public function index()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$data['nArticulos'] = $this->marticulos->countArticulos();
		$data['nGeneros'] = $this->mgeneros->countGeneros();
		$data['nUsuarios'] = $this->musuarios->countUsuarios();
		$this->load->view('admin/index',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
}
