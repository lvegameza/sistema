<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Msubgeneros extends CI_Model
{
	
	public function __construct() {
		parent::__construct();
	}

	public function all($GeneroID)
	{		
		$this->db->from('subgeneros')->where('GeneroID',$GeneroID);
		$query = $this->db->get();  
		return $query->result();
	}
	public function insert($data)
	{
		$this->db->insert('subgeneros', $data);
		return;
	}	
    public function getSubgeneros($generoID) 
    {
        $this->db->where('GeneroID', $generoID);        
        $subgeneros = $this->db->get('subgeneros');
        
        if($subgeneros->num_rows() > 0){
            return $subgeneros->result();
        }
    }
	
}