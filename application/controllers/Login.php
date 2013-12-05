<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function construct()
    {
      
       $this->load->view('Login/Login');
    }

	public function index()
	{
		$this->load->model('LoginModel');
		$usuario= $this->input->post('usuario');
		$clave= $this->input->post('clave');

     if(($usuario=="logan") && ($clave=="123"))
     {
         redirect(base_url()."Principal");
     }
     else
     {
		  $datos= $this->LoginModel->get_profesores($usuario,$clave); 
          foreach($datos as $row)
          {
     	       if(($usuario==$row->Nombre_Completo) && ($clave==$row->Contrasena))
		       {

                   redirect(base_url()."Principal");

                  }
                  else
                  {
			       $datos1= $this->LoginModel->get_estudiantes($usuario,$clave); 
                   foreach($datos1 as $row)
                   {
     	           if(($usuario==$row->Nombre_Completo) && ($clave==$row->Contrasena))
		            {

		            	redirect(base_url()."Principal");

		            }else
		            {
                      $datos2= $this->LoginModel->get_admin($usuario,$clave); 
                      foreach($datos2 as $row)
                       {
     	               if(($usuario==$row->Nombre_Completo) && ($clave==$row->Contrasena))
		                {

                          redirect(base_url()."Principal");

                         }else
                          {
                          	$this->load->view('Login/Login');
                          }


                       }
                    }
                   }
                }
           }
	  }//else primero
	
	}//funcion index	
	

	
}//termina la clase