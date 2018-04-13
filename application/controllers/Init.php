<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('minit');
        $this->load->model('musuarios');
    }

	
	public function index()
	{
		switch ($this->session->userdata('perfil')) {
			case '':				
				$data['token'] = $this->token();
				$this->load->view('index',$data);
				break;
			case '1':
				redirect(base_url().'admin');
				break;
			case '2':
				redirect(base_url().'cliente');
				break;
			case '3':
				redirect(base_url().'instructor');
				break;
			default:				
				$data['token'] = $this->token();
				$this->load->view('index',$data);
				break;				
		}

	}
	public function login()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
			$this->form_validation->set_rules('correo','nombre de usuario','required|trim|min_length[2]|max_length[150]');
			$this->form_validation->set_rules('clave','password','required|trim|min_length[2]|max_length[150]');
			if($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('message_e','<p class="text-center"><strong><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i> DEBE DE INGRESAR SU USUARIO Y CONTRASEÑA</strong></p>');
				redirect(base_url());
			}else{
				$username = $this->input->post('correo');
				$password = $this->input->post('clave');
				$check_user = $this->minit->login_user($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
						'is_logued_in'	=> TRUE,
						'idusuario'		=> $check_user->UsuarioID,
						'perfil'		=> $check_user->RolID,
						'username'		=> $check_user->Nombres,
						'cor_usu'		=> $check_user->Correo                 
						);					
					$this->session->set_userdata($data);		
					//$this->minit->insert_log($this->session->userdata('idusuario'));
					$this->index();
				}
			}
		}else{		
			redirect(base_url());
		}
	}

	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}

	public function logout_ci()
	{		
		$this->session->sess_destroy();
		redirect(base_url());
	}

    public function newuser()
    {
            //$this->form_validation->set_rules('ruc','ruc','required|trim|min_length[2]|max_length[20]|callback_comprobar_usuario_ajax');
            $this->form_validation->set_rules('ruc','ruc','required|trim|min_length[2]|max_length[20]');
			$this->form_validation->set_rules('rs','rs','required|trim|min_length[2]|max_length[200]');
            $this->form_validation->set_rules('contacto','contacto','required|trim|min_length[3]|max_length[100]');
            $this->form_validation->set_rules('correo','correo','required|trim|valid_email');
            if($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('message_e','<p class="text-center"><strong><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i> DEBE DE LLENAR TODOS LOS CAMPOS SOLICITADOS</strong></p>');
				redirect(base_url());
			}else{          
                //EL USUARIO VA HACER EL RUC D ELA EMRPESA.
                $clave = $this->token();                
                $cryp1 =  substr($clave, 0, 4);
                $cryp2 =  substr($this->input->post('dni'), 0, 2);
                $data = array (
                    'ruc_usu'	=> $this->input->post('ruc'),
                    'rs_usu'	=> $this->input->post('rs'),
                    'dni_usu'	=> $this->input->post('dni'),
                    'cont_usu'	=> ucwords(strtolower($this->input->post('contacto'))),
                    'ema_usu'	=> strtolower($this->input->post('correo')),
                    'telf_usu'	=> $this->input->post('telf'),
                    'anx_usu'	=> $this->input->post('anx'),
                    'usuario'	=> $this->input->post('ruc'),
                    'clave'		=> $cryp1.$cryp2,
                    'fec_cre'	=> date('Y-m-d H:i:s'),
                    'est_usu'	=> 1,
                    'idperfil'	=> 2,
                    'direccion' => strtolower($this->input->post('direccion'))
                );
                $this->madm_usuario->insert($data);
                $this->session->set_flashdata('message_s','<i class="fa fa-check" aria-hidden="true"></i> <strong>FELICITACIONES!</strong> En breve le estara llegando un correo de activación de su cuenta.');
				redirect(base_url());
            }            

    }

    public function comprobar_usuario_ajax() 
    {
        $ruc = $this->input->post('ruc');
        $comprobar_username = $this->minit->verifica_ruc($ruc);        

        if ($comprobar_username == $ruc) {
            $this->form_validation->set_message('comprobar_usuario_ajax', '%s: ya existe en la base de datos');
            $data = "0";
        } else {            
            $data = "1";
        }
        echo $data;        
    }
}
