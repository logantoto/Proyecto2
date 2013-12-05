
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CarreraModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($carrera)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("carrera", $carrera)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaCarreras()
    {
        $query = $this->db->get('carrera');
        return $query->result_array();
    }
    
    public function ObtenerCarrera($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('carrera');
        return $query->row();
    }
    
    public function Editar($id, $carrera)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->update('carrera', $carrera)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($id)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->delete('carrera')) {
            return true;
        } else {
            return false;
        }
    }
}