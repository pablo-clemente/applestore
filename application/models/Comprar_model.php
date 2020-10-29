<?php
        class Comprar_model extends CI_Model{
            public function __construct(){
		$this->load->database();
        }
            public function insert($param){
		$field= array(
			'ProductoId' => $param['id_producto'],
			'ClienteId' => $param['id_cliente']
			);
		$this->db->insert("Pedido",$field);
        }
	    public function get_pedidos(){
            $query = $this->db->get('Pedido');
            return $query->result_array();
        }

}
