<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiante extends CI_Controller {

	public function index()
	{
		$this->load->model("EstudianteModel");
		$data['data']=$this->EstudianteModel->ListaEstudiantes();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Estudiante/index',$data);
	}

	public function Crear()
	{
		$this->load->view('Estudiante/Crear');
	}

	public function CrearEstudiante()
	{
		$estudiante=array(
			'Correo' => $this->input->post('correo') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'));
var_dump($estudiante);
		$this->load->model("EstudianteModel");
		if($this->EstudianteModel->Crear($estudiante))   
		{
			$data['data']=$this->EstudianteModel->ListaEstudiantes();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Estudiante/Crear',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("EstudianteModel");
		$data['data']=$this->EstudianteModel->ObtenerEstudiante($id);
		$this->load->view('Estudiante/Editar',$data);
	}

	public function EditarEstudiante()
	{
		$id=$this->input->post('id'); 

		$estudiante=array(
			'Correo' => $this->input->post('correo') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'),
             'Status' => $this->input->post('status'));
		$this->load->model("EstudianteModel");
		if($this->EstudianteModel->Editar($id,$estudiante))
		{
			redirect(base_url()."Estudiante");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Eliminar()
	{
		$id=$this->uri->segment(3);

		$this->load->model("EstudianteModel");
		if($this->EstudianteModel->Eliminar($id))
		{
			redirect(base_url()."Estudiante");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}