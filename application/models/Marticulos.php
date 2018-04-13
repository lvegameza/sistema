<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Marticulos extends CI_Model
{
	
	public function __construct() {
		parent::__construct();
	}
	public function all()
	{
		$this->db->select('ArticuloID,Codigo,articulos.Nombre as n1,Moneda,Precio,generos.Nombre as n2,subgeneros.Nombre as n3');
		$this->db->from('articulos');		
		$this->db->join('subgeneros','subgeneros.SubGeneroID=articulos.SubGeneroID');	
		$this->db->join('generos','subgeneros.GeneroID=generos.GeneroID');
		$this->db->group_by('ArticuloID');					
		$query = $this->db->get();
		return $query->result();
	}
	public function insert($data)
	{
		$this->db->insert('articulos', $data);
		return;
	}
	public function countArticulos()
	{
		$query = $this->db->query('SELECT * FROM articulos');
		return $query->num_rows();
	}
}
 