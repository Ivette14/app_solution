<?php 
 	class Crud_model_subcategoria extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los usuarios
    public function get_subcategoria()
    {
        $sql = $this->db->get('subcategoria');
        return $sql->result();
    }
    //agregamos un usuario
    public function agregar_subcategoria($id_subcategoria,$id_categoria,$nombre_subcate,$descripcion,$ponderacion)
    {
        $this->db->insert('subcategoria',array(
            'id_subcategoria'      => $id_subcategoria,
            'id_categoria'         => $id_categoria,
            'nombre_subcate'       => $nombre_subcate,
            'descripcion'          => $descripcion,
            'ponderacion'          => $ponderacion,

            
        ));
    }
}

?>