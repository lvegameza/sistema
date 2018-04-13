<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('musuarios');
		$this->load->model('mroles');
	}

	
	public function index()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$data['listar'] = $this->musuarios->all();
		$this->load->view('admin/usuarios/index',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function add()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$data['listar'] = $this->mroles->all();
		$this->load->view('admin/usuarios/add',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function insert()
	{		
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Username', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('clave', 'Password', 'required|matches[clave2]');
		$this->form_validation->set_rules('clave2', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('correo', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE)
        {            
            $this->session->set_flashdata('message_e','FALTA INGRESAR DATOS COMPLETOS O LAS CONTRASEÑAS NO SON IGUALES');

            redirect(base_url('usuarios/add'));
        }
         else
        {            
            $data = array(
				'Nombres'	=> strtoupper($this->input->post('nombre')),
				'Correo'	=> strtolower($this->input->post('correo')),
				'Telefono'	=> $this->input->post('telefono'),
				'Clave'		=> $this->input->post('clave'),
				'Estado'	=> 0,
				'Created_at'=> date('Y-m-d H:i:s'),
				'Updated_at'=> date('Y-m-d H:i:s'),
				'RolID'		=> $this->input->post('rol')
			);
			$this->musuarios->insert($data);
        	$this->session->set_flashdata('message_s', 'USUARIO CREADO SATISFACTORIAMENTE.');
            redirect(base_url('usuarios'));    
        }	 
    }		
}

