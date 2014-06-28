<?php 
 	class Crud_model_categoria extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los usuarios
    public function get_categorias()
    {
        $sql = $this->db->get('categoria');
        return $sql->result();
    }
    //agregamos un usuario
    public function agregar_categoria($id_categoria,$nombre_cate,$descripcion)
    {
        $this->db->insert('categoria',array(
            'id_categoria'   => $id_categoria,
            'nombre_cate'    => $nombre_cate,
            'descripcion'    => $descripcion,
            
        ));
    }

     public function actualizar_categoria($id_categoria, $descripcion)
    {
        $this->db->where('id_categoria', $id_categoria);
        $this->db->update('categoria',array(            
            'descripcion'        => $descripcion
            
        ));
    }

    public function get_act($id_categoria)
    {
        $sql = $this->db->get_where('categoria',array('id_categoria'=>$id_categoria));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }
      
      

    public function tabla()
    {        
       $query = $this->db->query('SELECT *
                                    FROM categoria 
                                     GROUP BY nombre_cate');
       return $query->result();    
    }
}

?>