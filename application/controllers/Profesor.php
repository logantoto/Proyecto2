<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesor extends CI_Controller {

	public function index()
	{
		$this->load->model("ProfesorModel");
		$data['data']=$this->ProfesorModel->ListaProfesores();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Profesor/index',$data);
	}

	public function Crear()
	{
		$this->load->view('Profesor/Crear');
	}

	public function CrearProfesor()
	{
		$profesor=array(
			'Correo' => $this->input->post('correo') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'));

		$this->load->model("ProfesorModel");
		if($this->ProfesorModel->Crear($profesor))
		{
			$data['data']=$this->ProfesorModel->ListaProfesores();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Login/Login',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("ProfesorModel");
		$data['data']=$this->ProfesorModel->ObtenerProfesor($id);
		$this->load->view('Profesor/Editar',$data);
	}

	public function EditarProfesor()
	{
		$id=$this->input->post('id'); 

		$profesor=array(
			'Correo' => $this->input->post('correo') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'),
			'Status' => $this->input->post('status'));

		$this->load->model("ProfesorModel");
		if($this->ProfesorModel->Editar($id,$profesor))
		{
			redirect(base_url()."Profesor");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Eliminar()
	{
		$id=$this->uri->segment(3);

		$this->load->model("ProfesorModel");
		if($this->ProfesorModel->Eliminar($id))
		{
			redirect(base_url()."Profesor");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}