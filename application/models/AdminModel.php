
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($admin)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("admin", $admin)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaAdmines()
    {
        $query = $this->db->get('admin');
        return $query->result_array();
    }
    
    public function ObtenerAdmin($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('admin');
        return $query->row();
    }
    
    public function Editar($id, $admin)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->update('admin', $admin)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($id)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->delete('admin')) {
            return true;
        } else {
            return false;
        }
    }
}