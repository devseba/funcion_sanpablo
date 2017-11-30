<?php defined('BASEPATH') OR exit('No direct script access allowed');

 

class Login extends CI_Controller

{

 

  function __construct()

  {

    parent::__construct();

    $this->load->model("admin/Modelo_login");

    $this->load->model("admin/Modelo_inscriptos");

  }

 

  public function index($error = ''){

  	$this->load->view('include/header_admin');

	  $this->load->view('include/navbar_admin');

	  $data['action'] = "admin/Login/ingresar";
    $data['error'] = $error;

  	$this->load->view('admin/login_view',$data);

  	$this->load->view('include/footer_admin');

  }



  public function ingresar(){

  	if(isset($_POST)){

      // $usu=$_POST['email'];

      // $con=$_POST['password'];
      
      $datos = array("username" => $_POST['email']);
      if($this->Modelo_login->validarUsuario($datos)){

        $this->session->set_userdata(array("email" => $_POST["email"]));

        redirect("admin/Inscriptos");

  		}

  		else{

  			//echo "No existe";

        //echo "No existe";
       $error = "Usuario incorrecto";
       $this->index($error);		

  		}

  	}

  }



  public function salir(){

    $this->session->sess_destroy();

    redirect("admin/login");

  }

}