<?php 
    class Crud_subcategoria extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        //$this->load->library('pagination');
        //$this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_subcategoria");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        $subcategorias = $this->crud_model_subcategoria->tabla();
        $data['subcategorias'] = $subcategorias;

        $this->load->view('header');    
            $this->load->view('form/frm_subcategoria',$data);
        $this->load->view('foorter');
    
    }

    public function agregar()
    {
         if($this->input->post('post') && $this->input->post('post')==1)
         //Si Existe Post y es igual a uno
            {
            $this->form_validation->set_rules('nombre_subcate', 'Nombre Subcategoria', 'required|trim|xss_clean');
            $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|trim|xss_clean');
            $this->form_validation->set_rules('ponderacion', 'Ponderacion', 'required|numeric|trim|xss_clean');
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            if ($this->form_validation->run() == TRUE)
            {
               
                $id_categoria       = $this->input->post('id_categoria'); 
                $nombre_subcate     = $this->input->post('nombre_subcate');
                $descripcion        = $this->input->post('descripcion');
                $ponderacion        = $this->input->post('ponderacion');
                $this->crud_model_subcategoria->agregar_subcategoria($id_categoria,$nombre_subcate,$descripcion,$ponderacion);               
         redirect('crud_subcategoria');               
            }
        }
           //cargamos nuestra vista
        $this->load->view('header');
        $this->load->view('form/view_subcategoria');
        $this->load->view('foorter');
      } 



    public function editar($id_subcategoria=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_subcategoria->get_act($id_subcategoria);
        //$datos['sucursal'] = $this->crud_model_empleado->sucur();
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
            //Si existe el post para editar
            if($this->input->post('post') && $this->input->post('post')==1)
            {
           ;            
            $this->form_validation->set_rules('nombre_subcate', 'Nombre Subcategoria', 'required|trim|xss_clean');
            $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|trim|xss_clean');
            $this->form_validation->set_rules('ponderacion', 'Ponderacion', 'required|numeric|trim|xss_clean');
            
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            if ($this->form_validation->run() == TRUE)
            {
               
                $nombre_subcate = $this->input->post('nombre_subcate');
                $descripcion  = $this->input->post('descripcion');                               
                $ponderacion     = $this->input->post('ponderacion');
                $this->crud_model_subcategoria->actualizar_subcategoria($id_subcategoria, $nombre_subcate, $descripcion, $ponderacion);
 //$this->crud_model_empleado->actualizar_empleado($id_empleado, $codigo_empleado, $id_sucursal, $nombre_empleado, $direccion_empleado, $telefono_empleado, $email_empleado);

                redirect('crud_subcategoria');               
            }

            }
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header');
            $this->load->view('form/frm_editar_subcategoria',$data);
            $this->load->view('foorter');
        }
    }
}

?>