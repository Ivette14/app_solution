<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_caso extends CI_Controller {
Public function __construct()
	{
		parent::__construct();
        @ session_start();
		$this->load->library('pagination');
		$this->load->library(array('session','form_validation'));
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->helper('date');
        $this->load->model("crud_model_caso");
	}

function index()
{
	 if($this->input->post('post') && $this->input->post('post')==1)
        {
            $this->form_validation->set_rules('nombre_caso', 'Nombre Del caso',           'required|trim|xss_clean');
            $this->form_validation->set_rules('descripcion', 'Campo Cuenta',   'required|trim|xss_clean');  
            $this->form_validation->set_rules('ubicacion', 'Campo Sucursal',              'required|trim|xss_clean');
            $this->form_validation->set_rules('reporto_caso', 'Campo Proveedor',             'required|trim|xss_clean');

        $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
        if ($this->form_validation->run() == TRUE)
            {

                $nombre_caso = $this->input->post('nombre_caso');
                $descripcion = $this->input->post('descripcion');
                $ubicacion = $this->input->post('ubicacion');
                $reporto_caso = $this->input->post('reporto_caso');
                $estado = 1;
                $asignado = 0;
     
        $timestamp = now();
        $timezone = 'UM8';
        $daylight_saving = FALSE;

        $now = gmt_to_local($timestamp, $timezone, $daylight_saving);
        $datestring = "%Y-%m-%d %h:%i:%s";
        $fecha_reporte = $this->now = mdate($datestring, $now);
         $this->crud_model_caso->nuevo_caso($nombre_caso,$reporto_caso,$descripcion,$fecha_reporte,$ubicacion,$estado,$asignado);
	   redirect('crud_caso');   
}

}
$this->load->view('header');
$this->load->view('form/frm_new_caso');
$this->load->view('foorter');

}
function responsable()
{


   $casos= $this->crud_model_caso->get_casos();
        //creamos una variable usuarios para pasarle a la vista
    $data['casos'] =   $casos;
$this->load->view('header');
$this->load->view('form/frm_responsable_caso',$data);
$this->load->view('foorter');


}

function asignar_responsable($id_caso=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_caso->get_caso($id_caso);
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
            //Si existe el post para editar
           if($this->input->post('post') && $this->input->post('post')==1)
            {
            $this->form_validation->set_rules('id_caso', 'Codigo Caso', 'required|trim|xss_clean');
            $this->form_validation->set_rules('responsable', 'reponsable', 'required|trim|xss_clean');
            
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
                if ($this->form_validation->run() == TRUE)
                {
                $id_caso             = $this->input->post('id_caso');
                $responsable         = $this->input->post('responsable');
                $asignado = 1;
        $timestamp = now();
        $timezone = 'UM8';
        $daylight_saving = FALSE;

        $now = gmt_to_local($timestamp, $timezone, $daylight_saving);
        $datestring = "%Y-%m-%d %h:%i:%s";
        $fecha_asignacion = $this->now = mdate($datestring, $now);

                $this->crud_model_caso->inser_responsable($id_caso,$responsable,$fecha_asignacion,$asignado);
                    //redireccionamos al controlador CRUD
                    redirect('crud_caso');               
                }
            }
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header');
            $this->load->view('form/frm_asignar_responsable',$data);
            $this->load->view('foorter');
        }
    }
}
