<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


    function __construct(){
		parent::__construct();
			//$this->output->enable_profiler(TRUE);
	}
		
 //------------------------------------------------------   
	public function index()
	{  
	    $this->load->view('include/header');
		$this->load->view('include/navbar');
		$this->load->view('vista_inicio');
		
		$this->load->view('include/footer');
	}
    //------------------------------------------------------ 
	public function inscripcion(){
		if($_POST){
			
			$this->load->model('model_inscriptos');
			$dni = $this->input->post("dni");
			
			$nombre = $this->input->post("nombre");
            $apellido =$this->input->post("apellido");
			
			// Si no vienen seteados por post el usuario y clave
            if($apellido != "" ||  $nombre!= "" ){
				
				//if (isset($correo)){
              //  if(filter_var($correo, FILTER_VALIDATE_EMAIL)){ /// ci el email es valido
                 	    $campos_post= array(
                            'nombre'=> $nombre,
                            'apellido'=> $apellido,
                            'correo' => $this->input->post("email"),
                            'dni'=> $dni,
							'telefono'=> $this->input->post("telefono"),
                            'sexo'=>  $this->input->post("optionsRadios")
                 	 	);
                if($this->model_inscriptos->inscribir($campos_post)){
                   //echo "Se inscribio con exito!!";
                   $message = "<b>Se inscribio con exito!!</b>";
                   $data = array(
                                   'status' => TRUE,
                                   'message' => '<b>PREINSCRIPCION CONFIRMADA</b><Br><Br>Consulte los puntos de entrega y retire su entrada desde el 20 de Mayo' 
                                );   
                  //print_r($data);
				   
                  echo json_encode($data);
                  
                }else{
                   // echo "Ya existe un Inscripto con el m&iacute;ismo correo";
                    $data = array(
                                   'status' => FALSE,
                                   'message' => '<b>ATENCION NO SE PUDO PREINSCRIBIR </b>' 
                                );   
                    //print_r($data);
					
                   echo json_encode($data);
                }
                    // $result = $this->model_inscriptos->inscribir($campos_post);
                           
           /* }else{
             	 $data = array(
                                   'status' => FALSE,
                                   'message' => '<b>ATENCION: INGRESE UN CORREO VALIDO </b>' 
                         );  
                          echo json_encode($data); 
             }
            }else{
	                $data = array(
                                   'status' => FALSE,
                                   'message' => '<b>ATENCION: INGRESE SU CORREO  PARA PODER PREINSCRIBIRSE </b>' 
                     );   
	                echo json_encode($data); 
            }*/  
				
			}else{
				 $data = array(
                                   'status' => FALSE,
                                   'message' => '<b>ATENCION: COMPLETE LOS DATOS SOLICITADOS </b>' 
                         );  
                 echo json_encode($data);
			}
			

		}else{
		   
		    $this->load->view('include/header');
		    $this->load->view('include/navbar');  
		    $data['action'] = 'inicio/inscripcion';
		    $this->load->view('vista_inscripcion',$data);
		
	     	$this->load->view('include/footer');	
		}
		
	}
    //------------------------------------------------------ 
	public function retirar_entrada(){
		$this->load->view('include/header');
		$this->load->view('include/navbar');  
		$this->load->view('vista_retirar_entrada');
		$this->load->view('include/footer');
	}
	//----------------------------------------------------
	public function bio_manes(){
		$this->load->view('include/header');
		$this->load->view('include/navbar');  
		$this->load->view('vista_bio_manes');
		$this->load->view('include/footer');
	}
	
	//----------------------------------------------------
	public function conferencia(){
		$this->load->view('include/header');
		$this->load->view('include/navbar');  
		$this->load->view('vista_conferencia');
		$this->load->view('include/footer');
	}
	//----------------------------------------------------
	public function info_conferencia(){
		$this->load->view('include/header');
		$this->load->view('include/navbar');  
		$this->load->view('vista_info_conferencia');
		$this->load->view('include/footer');
	}
	

}
