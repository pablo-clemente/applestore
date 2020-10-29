<?php
  $nombre = $this->input->post('nombre');
  $correo =  $this->input->post('correo');
  $password = $this->input->post('password');
  $sexo = $this->input->post('sexo');
  $fecha = $this->input->post('fecha');
  $direccion = $this->input->post('direccion');
  $estado = $this->input->post('estado');
  $municipio = $this->input->post('municipio');

  $this->auth->insert_user($nombre, $password, $correo, $sexo, $fecha, $direccion, $estado, $municipio);
  $this->session->set_flashdata('register_info', 'User Registered Successfully');
  //redirect('user/register');
  $this->load->view('users/exito')
?>
