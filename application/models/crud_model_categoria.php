<?php 
 	class Crud_model_categoria extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los usuarios
    public function get_categoria()
    {
        $sql = $this->db->get('categoria');
        return $sql->result();
    }
    //agregamos un usuario
    public function agregar_categoria($id_categoria,$nombre_cate,$descripcion)
    {
        $this->db->insert('categoria',array(
            'id_categoria'      => $id_categoria,
            'nombre_cate'    => $nombre_cate,
            'descripcion'   => $descripcion,
            
        ));
    }
}

?>