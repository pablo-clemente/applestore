<?php
        class Comprar extends CI_Controller{
                public function index(){
                $data['title'] = 'Realizar Compra';
                $data['Productos'] = $this->producto_model->get_productos();
		$data['Clientes'] = $this->cliente_model->get_clientes();
                $this->load->view('templates/header');
                $this->load->view('comprar/index',$data);
                $this->load->view('templates/footer');

	}
		public function insert(){
		$producto = Null;
		$cliente = Null;
		extract($_POST);
		$param['id_producto'] = $producto;
		$param['id_cliente'] = $cliente;
		if(isset($producto)){
			$this->load->model('comprar_model');
			$result=$this->comprar_model->insert($param);
			$this->load->view('templates/header');
			$this->load->view('comprar/exito');
		}
	}
		public function view(){
		$this->load->model('comprar_model');
                $data['Pedidos'] = $this->comprar_model->get_pedidos();
                $data['title'] = 'Pedidos';

                $this->load->view('templates/header');
                $this->load->view('comprar/view',$data);
        }

}

