<?php
        class Productos extends CI_Controller{
                public function index(){
		$data['title'] = 'Productos Disponibles';
                $data['Productos'] = $this->producto_model->get_productos();
		//print_r($data['Producto']);
		$this->load->view('templates/header');
                $this->load->view('productos/index',$data);
                $this->load->view('templates/footer');

        }
		public function view($slug = NULL){
		$data['Producto'] = $this->producto_model->get_productos($slug);

		if(empty($data['Producto'])){
			show_404();
		}
		$data['title'] = $data['Producto']['Nombre'];
     
                $this->load->view('templates/header');
                $this->load->view('productos/view',$data);
	}
}

