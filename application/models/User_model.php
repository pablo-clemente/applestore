<?php

class User_model extends CI_Model
{
  
  public function insert_user($nombre, $password, $correo, $sexo, $fecha, $direccion, $estado, $municipio){
    $query = $this->db->query("INSERT INTO Cliente (Nombre, password, Correo, Sexo, Fecha_de_nacimiento, Direccion, Estado, Municipio) VALUES ('$nombre', '$password', '$correo', '$sexo', '$fecha', '$direccion', '$estado', '$municipio')");
  }

  public function login_user($correo, $password){
    $query =$this->db->query("SELECT * FROM Cliente WHERE Correo='$correo' AND password='$password'");
    if($query->num_rows() == 1){
      return true;
    }else{
      return false;
    }
  }

  public function Consulta_usuarios()
        {
                $this->load->database('mysql');
                $sql = "select ClienteID, Nombre, Correo, Direccion, Estado, Municipio from Cliente;";
                return $this->db->query($sql)->result();

        }}
