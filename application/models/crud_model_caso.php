   <?php 
 	class Crud_model_caso extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

public function nuevo_caso($nombre_caso,$reporto_caso,$descripcion,$fecha_reporte,$ubicacion,$estado)
{
   $this->db->insert('caso', array(
        'nombre_caso'                  =>$nombre_caso,
        'reporto_caso'                =>$reporto_caso,
        'descripcion'                 =>$descripcion,
        'fecha_reporte'               =>$fecha_reporte,
        'ubicacion'                   =>$ubicacion,
        'estado'                      =>$estado
        ));

 
 }

  public function get_casos()
    {    
        $query = $this->db->query('SELECT * from caso where estado = 1');
         return $query->result();
        } 
    }

    ?>