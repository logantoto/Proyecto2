<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class LoginModel extends CI_Model{

public function __construct() {
		parent::__construct();
	}

 function get_estudiantes(){ // armamos la consulta
  $query = $this->db-> query('SELECT Nombre_Completo,Contrasena FROM estudiante WHERE Status=1'); 

  // si hay resultados 
  if ($query->num_rows() > 0) 
  { // almacenamos en una matriz bidimensional 
  	//foreach($query->result() as $row) $arrDatos[htmlspecialchars($row->Nombre_Completo, ENT_QUOTES)] = htmlspecialchars($row->Contrasena, ENT_QUOTES); $query->free_result(); 
  	return $query->result();
  	 }
  	  }

 function get_admin(){ // armamos la consulta
  $query = $this->db-> query('SELECT Nombre_Completo,Contrasena FROM admin WHERE Status=1'); 
  
  // si hay resultados 
  if ($query->num_rows() > 0) 
  { // almacenamos en una matriz bidimensional 
  	//foreach($query->result() as $row) $arrDatos[htmlspecialchars($row->Nombre_Completo, ENT_QUOTES)] = htmlspecialchars($row->Contrasena, ENT_QUOTES); $query->free_result(); 
  	return $query->result();
  	 }
  	  }

  	   function get_profesores(){ // armamos la consulta
  $query = $this->db-> query('SELECT Nombre_Completo,Contrasena FROM profesor WHERE Status=1'); 
  
  // si hay resultados 
  if ($query->num_rows() > 0) 
  { // almacenamos en una matriz bidimensional 
  	//foreach($query->result() as $row) $arrDatos[htmlspecialchars($row->Nombre_Completo, ENT_QUOTES)] = htmlspecialchars($row->Contrasena, ENT_QUOTES); $query->free_result(); 
  	return $query->result();
  	 }
  	  }


}

  
	
	
	
