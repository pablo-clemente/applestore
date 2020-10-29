<?php
        class Cliente_model extends CI_Model{
            public function __construct(){
                $this->load->database();
        }
            public function get_clientes(){
            $query = $this->db->get('Cliente');
	    return $query->result_array();
        }
}
