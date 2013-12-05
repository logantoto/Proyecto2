<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrera extends CI_Controller {

	public function index()
	{
		$this->load->model("CarreraModel");
		$data['data']=$this->CarreraModel->ListaCarreras();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Carrera/index',$data);
	}

	public function Crear()
	{
		$this->load->view('Carrera/Crear');
	}

	public function CrearCarrera()
	{
		$carrera=array(
	     'Nombre' => $this->input->post('nombre'));

		$this->load->model("CarreraModel");
		if($this->CarreraModel->Crear($carrera))   
		{
			$data['data']=$this->CarreraModel->ListaCarreras();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Carrera/Crear',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("CarreraModel");
		$data['data']=$this->CarreraModel->ObtenerCarrera($id);
		$this->load->view('Carrera/Editar',$data);
	}

	public function EditarCarrera()
	{
		$id=$this->input->post('id'); 

		$carrera=array(
			'Nombre' => $this->input->post('nombre'));

		$this->load->model("CarreraModel");
		if($this->CarreraModel->Editar($id,$carrera))
		{
			redirect(base_url()."Carrera");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Eliminar()
	{
		$id=$this->uri->segment(3);

		$this->load->model("CarreraModel");
		if($this->CarreraModel->Eliminar($id))
		{
			redirect(base_url()."Carrera");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}