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
        //obtenemos todos los usuarios
        //$cuenta = $this->crud_model_cuenta->get_cuentas();
        //creamos una variable usuarios para pasarle a la vista
        //$data['cuenta'] = $cuenta;
        //cargamos nuestra vista
        $this->load->view('header');    
            $this->load->view('view_categoria');
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

}
?>