<?php
	class Producto_model extends CI_Model{
	    public function __construct(){
		$this->load->database();
	}
	    public function get_productos($slug = FALSE){
		 if($slug == FALSE){
			$query = $this->db->get('Producto');
			return $query->result_array();
		}
	    $query = $this->db->get_where('Producto', array('slug' => $slug));
	    return $query->row_array();
	}
}
