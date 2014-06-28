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
    public function agregar_subcategoria($id_categoria,$nombre_subcate,$descripcion,$ponderacion)
    {
        $this->db->insert('subcategoria',array(
            'id_categoria'         => $id_categoria,
            'nombre_subcate'       => $nombre_subcate,
            'descripcion'          => $descripcion,
            'ponderacion'          => $ponderacion,

            
        ));
    
    }



    public function actualizar_subcategoria($id_subcategoria,$nombre_subcate, $descripcion, $ponderacion)
         //    public function actualizar_empleado($id_empleado, $codigo_empleado, $id_sucursal, $nombre_empleado, $direccion_empleado, $telefono_empleado, $email_empleado)

    {
        $this->db->where('id_subcategoria', $id_subcategoria);
        $this->db->update('subcategoria',array(
            

            'nombre_subcate'     => $nombre_subcate,
            'descripcion'        => $descripcion,
            'ponderacion'        => $ponderacion,
            
        ));
    }

    public function get_act($id_subcategoria)
    {
        $sql = $this->db->get_where('subcategoria',array('id_subcategoria'=>$id_subcategoria));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }

    public function tabla()
    {        
       $query = $this->db->query('SELECT categoria.nombre_cate, subcategoria.id_subcategoria, subcategoria.nombre_subcate, subcategoria.descripcion, subcategoria.ponderacion FROM subcategoria INNER JOIN categoria ON categoria.id_categoria = subcategoria.id_categoria');
       return $query->result();    
    }
}

?>