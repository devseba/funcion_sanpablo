<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller
{
 
  function __construct()
  {
    parent::__construct();
    $this->load->model("admin/modelo_login");
    $this->load->model("admin/modelo_inscriptos");
  }
 
  public function index(){
  	$this->load->view('include/header_admin');
	  $this->load->view('include/navbar_admin');
	  $data['action'] = "admin/login/ingresar";
  	$this->load->view('admin/login_view',$data);
  	$this->load->view('include/footer_admin');
  }

  public function ingresar(){
  	if(isset($_POST)){
  		if($this->modelo_login->validarUsuario($_POST)){
        $this->session->set_userdata(array("email" => $_POST["email"]));
        redirect("admin/inscriptos");
  		}
  		else{
  			//echo "No existe";
			
			$this->index();
  		}
  	}
  }

  public function salir(){
    $this->session->sess_destroy();
    redirect("admin/login");
  }
}