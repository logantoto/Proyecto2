
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AulaModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($aula)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("aula", $aula)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaAulas()
    {
        $query = $this->db->get('aula');
        return $query->result_array();
    }
    
    public function ObtenerAula($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('aula');
        return $query->row();
    }
    
    public function Editar($id, $aula)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->update('aula', $aula)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($id)
    {
        var_dump($id);
        $this->db->where('id', $id);
        if ($this->db->delete('aula')) {
            return true;
        } else {
            return false;
        }
    }
}