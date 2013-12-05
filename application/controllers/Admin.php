<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model("AdminModel");
		$data['data']=$this->AdminModel->ListaAdmines();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Admin/index',$data);
	}

	public function Crear()
	{
		$this->load->view('Admin/Crear');
	}

	public function CrearAdmin()
	{
		$admin=array(
			'Correo' => $this->input->post('correo') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'));

		$this->load->model("AdminModel");
		if($this->AdminModel->Crear($admin))   
		{
			$data['data']=$this->AdminModel->ListaAdmines();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Admin/Crear',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("AdminModel");
		$data['data']=$this->AdminModel->ObtenerAdmin($id);
		$this->load->view('Admin/Editar',$data);
	}

	public function EditarAdmin()
	{
		$id=$this->input->post('id'); 

		$admin=array(
			'Correo' => $this->input->post('correo') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'),
			'Status' => $this->input->post('status'));

		$this->load->model("AdminModel");
		if($this->AdminModel->Editar($id,$admin))
		{
			redirect(base_url()."Admin");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Eliminar()
	{
		$id=$this->uri->segment(3);

		$this->load->model("AdminModel");
		if($this->AdminModel->Eliminar($id))
		{
			redirect(base_url()."Admin");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}