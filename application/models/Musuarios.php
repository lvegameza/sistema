<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Musuarios extends CI_Model
{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function all()
	{
		$query = $this->db->get('usuarios');
		return $query->result();
	}
	public function allxID($idusuario)
	{
		$this->db->from('usuarios')->where('UsuarioID',$idusuario);
		$query = $this->db->get();
		return $query->result();
	}
	public function insert($data)
	{
		$this->db->insert('usuarios', $data);
		return;
	}
	public function update($idusuario)
	{
		$this->db->where('UsuarioID', $idusuario);
		$this->db->update('usuarios', $data); 
	}
	public function delete($idusuario)
	{
		$this->db->delete('usuarios', array('UsuarioID' => $idusuario)); 
	}
	public function countUsuarios()
	{
		$query = $this->db->query('SELECT * FROM usuarios');
		return $query->num_rows();
	}
}
 