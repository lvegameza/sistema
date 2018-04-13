<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generos extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mgeneros');
		$this->load->model('msubgeneros');
	}

	/* ------------- GENERO ------------- */
	
	public function index()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$data['listar'] = $this->mgeneros->all();
		$this->load->view('admin/generos/index',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function add()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$this->load->view('admin/generos/add');
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function insert()
	{		
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'genero', 'trim|required|min_length[2]');
		if ($this->form_validation->run() == FALSE)        {            
            $this->session->set_flashdata('message_e','FALTA INGRESAR NOMBRE DEL GENERO');
            redirect(base_url('generos/add'));
        }
         else
        {            
            $data = array(
				'Nombre'		=> strtoupper($this->input->post('nombre')),
				'Descripcion'	=> $this->input->post('descripcion'),					
				'Estado'		=> 0,
				'Created_at'	=> date('Y-m-d H:i:s'),
				'Updated_at'	=> date('Y-m-d H:i:s')				
			);
			$this->mgeneros->insert($data);
        	$this->session->set_flashdata('message_s', 'GENERO CREADO SATISFACTORIAMENTE');
            redirect(base_url('generos'));    
        }	 
    }	


    /* ------------- SUBGENERO ------------- */

	public function subgenero()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$data['generoID'] = $this->uri->segment(3);
		$data['listar'] = $this->msubgeneros->all($data['generoID']);
		$this->load->view('admin/subgenero/index',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function addSub()
	{
		$this->load->view('admin/cabecera');
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('admin/nav',$data);
		$this->load->view('admin/aside',$data);
		$data['generoID'] = $this->uri->segment(3);
		$this->load->view('admin/subgenero/add',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/jss');
	}
	public function insertSub()
	{		
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'genero', 'trim|required|min_length[2]');		

		if ($this->form_validation->run() == FALSE)
        {            
            $this->session->set_flashdata('message_e','FALTA INGRESAR NOMBRE DEL SUBGENERO');

            redirect(base_url('generos/addSub'));
        }
         else
        {    
        	$generoID = $this->input->post('generoID');        
            $data = array(
				'Nombre'		=> strtoupper($this->input->post('nombre')),
				'Descripcion'	=> $this->input->post('descripcion'),					
				'Estado'		=> 0,
				'Created_at'	=> date('Y-m-d H:i:s'),
				'Updated_at'	=> date('Y-m-d H:i:s'),
				'GeneroID' 		=> $generoID
				
			);
			$this->msubgeneros->insert($data);
        	$this->session->set_flashdata('message_s', 'SUBGENERO CREADO SATISFACTORIAMENTE');
            redirect(base_url('generos/subgenero/'.$generoID));    
        }	 
    }
    public function CargarSubGenerosxID() 
	{
        $genero = $this->input->post('genero');
        
        if($genero){
            $this->load->model('msubgeneros');
            $subgeneros = $this->msubgeneros->getSubgeneros($genero);
            echo '<option value="0">Seleccione...</option>';
            foreach($subgeneros as $fila){
                echo '<option value="'. $fila->SubGeneroID .'">'. $fila->Nombre .'</option>';
            }
        }  else {
            echo '<option value="0">Seleccione...</option>';
        }
    }	
}
