
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ProfesorModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($profesor)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("profesor", $profesor)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaProfesores()
    {
        $query = $this->db->get('profesor');
        return $query->result_array();
    }
    
    public function ObtenerProfesor($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('profesor');
        return $query->row();
    }
    
    public function Editar($id, $profesor)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->update('profesor', $profesor)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($id)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->delete('profesor')) {
            return true;
        } else {
            return false;
        }
    }
}