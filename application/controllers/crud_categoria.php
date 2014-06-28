<?php 
    class Crud_categoria extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        //$this->load->library('pagination');
        //$this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_categoria");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        $categorias = $this->crud_model_categoria->tabla();
        $data['categorias'] = $categorias;

        $this->load->view('header');    
            $this->load->view('view_categoria',$data);
        $this->load->view('foorter');
    
    }

    public function agregar()
    {
         if($this->input->post('post') && $this->input->post('post')==1)
         //Si Existe Post y es igual a uno
            {
            $this->form_validation->set_rules('nombre_cate', 'Nombre Categoria', 'required|trim|xss_clean');
            $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|trim|xss_clean');
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            if ($this->form_validation->run() == TRUE)
            {
                $id_categoria = $this->input->post('id_categoria');  
                $nombre_cate = $this->input->post('nombre_cate');
                $descripcion = $this->input->post('descripcion');
                $this->crud_model_categoria->agregar_categoria($id_categoria,$nombre_cate,$descripcion);               
         redirect('crud_categoria');               
            }
        }
           //cargamos nuestra vista
        $this->load->view('header');
        $this->load->view('view_categoria');
        $this->load->view('foorter');
      }  


      public function editar($id_categoria=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_categoria->get_categorias($id_categoria);
        
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
            //Si existe el post para editar
            if($this->input->post('post') && $this->input->post('post')==1)
            {
            $this->form_validation->set_rules('descripcion', 'Nombre de area', 'required|trim|xss_clean');
            
         
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            if ($this->form_validation->run() == TRUE)
            {
                $descripcion        = $this->input->post('descripcion');
                

                $this->crud_model_categoria->actualizar_categoria ($id_categoria, $descripcion);

                redirect('crud_categoria');               
            }
            }
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header');
            $this->load->view('editar_categoria',$data);
            $this->load->view('foorter');
        }


    }
}  
?>