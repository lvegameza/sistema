<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Minit extends CI_Model
{
	
	public function __construct() {
		parent::__construct();
	}

	function login_user($correo,$password)
	{

		$this->db->where('correo',$correo);
		//$this->db->where('clave',md5($password));
		$this->db->where('clave',$password);

		$query = $this->db->get('usuarios');
		
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('message_e','<p class="text-center"><strong>EL USUARIO O CONTRASEÑA SON INCORRECTOS</strong></p>');
			redirect(base_url(),'refresh');
		}

	}
	function insert_log($idcliente)
	{
		$date = date('Y-m-d H:i:s');
		$data = array(
			'fec_acc'	=>$date,
			'idcliente'	=> $idcliente
			);
		$this->db->insert('access_cliente',$data);
		return;
	}
    function verifica_ruc($ruc) {        
        
        $this->db->from('usuario')->where('ruc_usu',$ruc);
		$consulta = $this->db->get();     
       
		if($consulta->num_rows() >= 1)
		{           
            $row = $consulta->row();
	        return $row->ruc_usu;
		}else{
            return 1;
        }     
		
    }
}
 