<?php 
    class Crud_historial extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        //$this->load->library('pagination');
        //$this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_historial");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        $casos = $this->crud_model_historial->tabla();
        $data['casos'] = $casos;

        $this->load->view('header');    
            $this->load->view('form/frm_historial',$data);
        $this->load->view('foorter');
    
    }
}
?>