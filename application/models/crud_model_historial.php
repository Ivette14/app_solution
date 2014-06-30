<?php 
 	class Crud_model_historial extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los usuarios
    public function get_casos()
    {
        $sql = $this->db->get('caso');
        return $sql->result();
    }
    
    public function tabla()
    {        
       $query = $this->db->query('SELECT *
                                    FROM caso 
                                     GROUP BY id_caso');
       return $query->result();    
    }
}

?>