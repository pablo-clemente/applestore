<?php

class User extends CI_Controller
{
  
  public function index(){
    echo "index";
  }

  public function login(){
    if($this->session->login == 'true'){
      redirect('/');
    }
    //echo "login";
    $this->load->view('templates/header');
    $this->load->view('users/login');
    $this->load->view('templates/footer');
  }

  public function login_post(){
    $correo = $this->input->post('correo');
    $password = $this->input->post('password');

    $this->load->model('user_model', 'auth');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('correo', 'Correo', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() == FALSE)
            {
              $this->login();
            }
            else
            {
              $response_val = $this->auth->login_user($correo, $password);
              if($response_val == true){
		echo "holaaa";
                $val = $response_val->row();
		$data = array(
			'correo'  => $val->Correo
			);
                $this->session->set_userdata($data);	
                $this->session->set_flashdata('login', 'true');
                $this->load->view('users/bienvenido');

              }elseif($response_val == false){
                $this->session->set_flashdata('login_info', 'failure message');
                echo "failure message";
                $this->load->view('users/bienvenido');
              }
            }
  }

  public function register(){
    if($this->session->login == 'true'){
      redirect('/');
    }
    //echo "register";
    $this->load->model('user_model', 'auth');
    $this->load->view('templates/header');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('correo', 'Correo', 'required|is_unique[Cliente.Correo]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('passwordagain', 'Password Confirmation', 'required|matches[password]');
    $this->form_validation->set_rules('sexo', 'Sexo');
    $this->form_validation->set_rules('fecha', 'Fecha');
    $this->form_validation->set_rules('direccion', 'direccion');
    $this->form_validation->set_rules('estado', 'Estado');
    $this->form_validation->set_rules('municipio', 'Municipio');

    //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('users/register');
                }
                else
                {
                        $this->load->view('users/register-update');
                }
     
    $this->load->view('templates/footer');
  }

  
  public function UsuariosReg()
        {

                $this->load->model("user_model", 'auth');
		$this->load->view('templates/header');
                $Usuarios = $this->auth->Consulta_usuarios();
                $this->load->view("users/usuarios", compact("Usuarios"));

        }



  public function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
?>
