<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aula extends CI_Controller {

	public function index()
	{
		$this->load->model("AulaModel");
		$data['data']=$this->AulaModel->ListaAulas();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Aula/index',$data);
	}

	public function Crear()
	{
		$this->load->view('Aula/Crear');
	}

	public function CrearAula()
	{
		$aula=array(
			'Numero_Aula' => $this->input->post('numero_aula') ,
			'Nombre' => $this->input->post('nombre') ,
			'Ubicacion' => $this->input->post('ubicacion'));
var_dump($aula);
		$this->load->model("AulaModel");
		if($this->AulaModel->Crear($aula))   
		{
			$data['data']=$this->AulaModel->ListaAulas();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Aula/Crear',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("AulaModel");
		$data['data']=$this->AulaModel->ObtenerAula($id);
		$this->load->view('Aula/Editar',$data);
	}

	public function EditarAula()
	{
		$id=$this->input->post('id'); 

		$aula=array(
			'Numero_Aula' => $this->input->post('numero_aula') ,
			'Nombre' => $this->input->post('nombre') ,
			'Ubicacion' => $this->input->post('ubicacion'));
		$this->load->model("AulaModel");
		if($this->AulaModel->Editar($id,$aula))
		{
			redirect(base_url()."Aula");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Eliminar()
	{
		$id=$this->uri->segment(3);

		$this->load->model("AulaModel");
		if($this->AulaModel->Eliminar($id))
		{
			redirect(base_url()."Aula");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}