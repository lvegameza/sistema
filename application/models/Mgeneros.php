<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Mgeneros extends CI_Model
{
	
	public function __construct() {
		parent::__construct();
	}
	
	/* ------------- SUBGENERO ------------- */

	public function all()
	{		
		$this->db->from('generos');
		$query = $this->db->get();  
		return $query->result();
	}
	public function insert($data)
	{
		$this->db->insert('generos', $data);
		return;
	}
	public function countGeneros()
	{
		$query = $this->db->query('SELECT * FROM generos');
		return $query->num_rows();
	}
	
}