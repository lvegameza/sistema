<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	
	public function index()
	{
		$this->load->model('marticulos');
		$this->load->view('cliente/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('cliente/nav',$data);	
		$data['listar'] = $this->marticulos->all();	
		$this->load->view('cliente/index',$data);		
		$this->load->view('cliente/js');
	}
}
