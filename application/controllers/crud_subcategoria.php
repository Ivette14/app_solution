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
        //obtenemos todos los usuarios
        //$cuenta = $this->crud_model_cuenta->get_cuentas();
        //creamos una variable usuarios para pasarle a la vista
        //$data['cuenta'] = $cuenta;
        //cargamos nuestra vista
        $this->load->view('header');    
            $this->load->view('view_subcategoria');
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
                $id_subcategoria    = $this->input->post('id_subcategoria');  
                $id_categoria       = $this->input->post('id_categoria'); 
                $nombre_subcate     = $this->input->post('nombre_subcate');
                $descripcion        = $this->input->post('descripcion');
                $ponderacion        = $this->input->post('ponderacion');
                $this->crud_model_subcategoria->agregar_subcategoria($id_subcategoria,$id_categoria,$nombre_subcate,$descripcion,$ponderacion);               
         redirect('crud_subcategoria');               
            }
        }
           //cargamos nuestra vista
        $this->load->view('header');
        $this->load->view('view_subcategoria');
        $this->load->view('foorter');
      }  

}
?>