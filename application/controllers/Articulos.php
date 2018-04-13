<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('marticulos');
		$this->load->model('mgeneros');
	}

	
	public function index()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$data['listar'] = $this->marticulos->all();
		$this->load->view('admin/articulos/index',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function add()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);	
		$data['listarGeneros'] = $this->mgeneros->all();
		$this->load->view('admin/articulos/add',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function insert()
	{
		$this->load->library('form_validation');

        $this->form_validation->set_rules('codigo', 'codigo', 'trim|required');
        $this->form_validation->set_rules('articulo', 'articulo', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('precio', 'precio', 'trim|required');

		if ($this->form_validation->run() == FALSE)        {            
            $this->session->set_flashdata('message_e','FALTA INGRESAR DATOS');
            redirect(base_url('articulos/add'));
        }
         else
        {            
            $data = array(
				'Codigo'		=> $this->input->post('codigo'),
				'Nombre'		=> strtoupper($this->input->post('articulo')),			
				'Moneda'		=> $this->input->post('moneda'),
				'Precio'		=> $this->input->post('precio'),
				'Created_at'	=> date('Y-m-d H:i:s'),
				'Updated_at'	=> date('Y-m-d H:i:s'),
				'SubGeneroID'	=> $this->input->post('subgenero')
			);
			/*echo "<pre>";
			print_r($data);
			echo "</pre>";*/
			$this->marticulos->insert($data);
        	$this->session->set_flashdata('message_s', 'GENERO CREADO SATISFACTORIAMENTE');
            redirect(base_url('articulos'));
        }	 
	}
}
