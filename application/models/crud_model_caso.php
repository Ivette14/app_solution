   <?php 
 	class Crud_model_caso extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

public function nuevo_caso($nombre_caso,$reporto_caso,$descripcion,$fecha_reporte,$ubicacion,$estado,$asignado)
{
   $this->db->insert('caso', array(
        'nombre_caso'                  =>$nombre_caso,
        'reporto_caso'                =>$reporto_caso,
        'descripcion'                 =>$descripcion,
        'fecha_reporte'               =>$fecha_reporte,
        'ubicacion'                   =>$ubicacion,
        'estado'                      =>$estado,
        'asignado'                    =>$asignado

        ));

 
 }
 public function inser_responsable($id_caso,$responsable,$fecha_asignacion,$asignado)
 {
  $this->db->insert('seguimiento', array(
        'id_caso'                     =>$id_caso,
        'responsable'                 =>$responsable,
        'fecha_asignacion'            =>$fecha_asignacion
        ));

  $this->db->where('id_caso', $id_caso);
        $this->db->update('caso',array(            
            'asignado'        => $asignado
            
        ));

 }

  public function get_casos()
    {    
        $query = $this->db->query('SELECT * from caso where estado = 1 and asignado = 0');
         return $query->result();
        } 


  public function get_casos_responsable()
    {    
        $query = $this->db->query('SELECT * from caso where estado = 1 and asignado = 1');
         return $query->result();
        } 


    public function get_caso($id_caso)
    {
        $sql = $this->db->get_where('caso',array('id_caso'=>$id_caso));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;  
    }

    public function get_seguimiento($id_caso)
    {
        $sql = $this->db->get_where('seguimiento',array('id_caso'=>$id_caso));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }

public function inser_observaciones($id_caso,$causa,$conclusion,$observacion,$estado)
 {
       $this->db->where('id_caso', $id_caso);
        $this->db->update('seguimiento',array(            
            'causa'        => $causa,
            'conclusion'        => $conclusion,
            'observacion'        => $observacion,          
        ));

        $this->db->where('id_caso', $id_caso);
        $this->db->update('caso',array(            
            'estado'        => $estado        
        ));
}

public function get_cerrar()
{
    $query = $this->db->query('SELECT 
        caso.id_caso, 
        caso.nombre_caso,
        seguimiento.causa, 
        seguimiento.conclusion, 
        seguimiento.observacion
     FROM  caso
  INNER JOIN seguimiento ON seguimiento.id_caso = caso.id_caso 
     WHERE caso.estado =2 ;');
         return $query->result();
}

public function cerrar($id_caso,$id_subcategoria,$fecha_resolucion,$estado)
{
   $this->db->insert('caso_cate', array(
        'id_caso'                   =>$id_caso,
        'id_subcategoria'            =>$id_subcategoria,
        'fecha_resolucion'            =>$fecha_resolucion

        ));
   $this->db->where('id_caso', $id_caso);
        $this->db->update('caso',array(            
            'estado'        => $estado         
        ));

}

}

    ?>