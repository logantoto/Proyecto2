
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class EstudianteModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($estudiante)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("estudiante", $estudiante)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaEstudiantes()
    {
        $query = $this->db->get('estudiante');
        return $query->result_array();
    }
    
    public function ObtenerEstudiante($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('estudiante');
        return $query->row();
    }
    
    public function Editar($id, $estudiante)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->update('estudiante', $estudiante)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($id)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->delete('estudiante')) {
            return true;
        } else {
            return false;
        }
    }
}