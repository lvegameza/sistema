<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Mroles extends CI_Model
{
	
	public function __construct() {
		parent::__construct();
	}

	public function All()
	{
		$this->db->from('roles');
		$this->db->order_by('RolID','desc');
		$query = $this->db->get();
		return $query->result();
	}	
}