<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
		//$this->load->view('vista_inscripcion');
		//$this->load->view('vista_localizacion');
		$this->load->view('include/footer');
	}

 //------------------------------------------------------   
	public function inscripcion()
	{  
	    $this->load->view('include/header');
		$this->load->view('include/navbar');
		$this->load->view('vista_inscripcion');
		$this->load->view('include/footer');
	
	}
//------------------------------------------------------
	public function guardar_inscripcion(){
		if($_POST){			
			$this->load->model('Model_inscriptos');
			$dnia=trim($_POST['dnia']); //$this->input->post("dnialumno");
			
			//$dnit =$_POST['dnit'];  //$this->input->post("dnitutor");
			// $campos_post= array(			    	
			// 			'nombre_tutor'=> 'gemma',
			// 			'apellido_tutor'=> 'gonzalez',
			//  			'dni_tutor'=> $dnit,
			// 			'dni_alumno'=> $dnia
	      //    	);

	    //    	var_dump($campos_post);
			// Si no vienen seteados por post el usuario y clave
			//if($dnia != "" ||  $dnit!= "" ){
				//$result=$this->Model_inscriptos->inscribir($dnia);
                if($this->Model_inscriptos->inscribir($dnia)){
                   //echo "Se inscribio con exito!!";
                   $message = "<b>Su reserva realizo con exito!!</b>";
                   $data =  array(
                   				'status' => TRUE,
	                            'message' => '<b>RESERVA CONFIRMADA</b><Br><Br>Consulte los puntos de entrega y retire su entrada desde el 20 de Mayo' 
                            );   
                  	//print_r($data);
                    //return $data;
                   echo json_encode($data) ;
                   	
					//$this->Asiento->asiento();
        			//$this->load->view('view_');
        			//return  $data;
				 	               
                }else{
                	
                	// echo "Ya existe un Inscripto con el m&iacute;ismo correo";
                 // echo 'nada';
                    //print_r($data);	
                     $data = array(
                    	'status' => FALSE,
                        'message' => '<b>ATENCION: este dni ya se encuentra inscripto</b>',
                        'query' => $this->db->last_query() 
                    );	
                      //return $data;
                       echo json_encode($data) ;			
                	
                }
	     	
 			// }else{
		   
		  //   $this->load->view('include/header');
		  //   $this->load->view('include/navbar');  
		  //   $data['action'] = 'inicio/inscripcion';
		  //   $data['message'] =	'<b>ATENCION: LAS ENTRADAS ESTÁN AGOTADAS</b>'; 
              
		  //   $this->load->view('vista_inscripcion',$data);
		
	   //   	$this->load->view('include/footer');	
		}
		
	}
//------------------------------------------------------ 
	//public function inscripcion(){
		// if($_POST){			
		// 	$this->load->model('model_inscriptos');
		// 	$dni = $this->input->post("dnitutor");
			
		// 	$nombre = $this->input->post("nombre");
 	 //           $apellido =$this->input->post("apellido");
			/* if(isset($this->input->post("email")) && $this->input->post("email") != ""){
				  $correo= $this->input->post("email");
			  }else{
				  $correo="-";
			  }*/
			/*$apellido =  $this->input->post("apellido");
			$nombre =  $this->input->post("nombre");*/
			// Si no vienen seteados por post el usuario y clave
    //         if($apellido != "" ||  $nombre!= "" ){
				// $email_valido = 0;//no es valido
				// $email_vacio = 1;//esta vacio
				// $enviar_mail = 0;//no inscribe
				// $correo = $this->input->post("email");
				// if (!empty($this->input->post("email"))){//si no viene vacio
				// 	$email_vacio = 0;//no esta vacio
				// 	if(filter_var($correo, FILTER_VALIDATE_EMAIL)){//si es valido
				// 		$email_valido = 1;//es valido
				// 		$enviar_mail = 1;//inscribir
				// 	}
				// 	else{// el email no es valido
	   //              	$enviar_mail = 0;                	
	   //          	}
				// }

			 //    $campos_post= array(			    	
	   //              'nombre'=> $nombre,
	   //              'apellido'=> $apellido,
	   //              'correo' => $this->input->post("email"),
	   //              'dni'=> $dni,
				// 	'telefono'=> $this->input->post("telefono"),
	   //              'sexo'=>  $this->input->post("optionsRadios")
	   //   	 	);
    //             if($this->model_inscriptos->inscribir($campos_post)){
    //                //echo "Se inscribio con exito!!";
    //                $message = "<b>Se inscribio con exito!!</b>";
    //                $data =  array(
    //                				'status' => TRUE,
	   //                          'message' => '<b>PREINSCRIPCION CONFIRMADA</b><Br><Br>Consulte los puntos de entrega y retire su entrada desde el 20 de Mayo' 
    //                         );   
    //               	//print_r($data);
				  
				//  	if($enviar_mail == 1){				    	
				//     	//echo "se envio mail"; //esto ya estabacomentado
				// 		$email = $this->envia_email($correo);
				// 		if($email == 1){
				// 			//echo "si se envio";
				// 		}
				// 		else{
				// 			//echo "no se envio"; //esto ya estabacomentado
				// 		}
			 //      	}else{
				// 		//echo "no entro"; //esto ya estabacomentado
				//   	}
    //               	echo json_encode($data);                  
    //             }else{
    //             	// echo "Ya existe un Inscripto con el m&iacute;ismo correo";
    //                 $data = array(
    //                 	'status' => FALSE,
    //                     'message' => '<b>ATENCION: este dni ya se encuentra inscripto</b>' 
    //                 );   
    //                 //print_r($data);					
    //             	echo json_encode($data);
    //             }
	     	
                // $result = $this->model_inscriptos->inscribir($campos_post);  //esto ya estabacomentado                         
            			
	// 		}else{
	// 			$data = array(
	// 				'status' => FALSE,
 //                	'message' => '<b>ATENCION: COMPLETE LOS DATOS SOLICITADOS </b>' 
 //                );  
 //                echo json_encode($data);
	// 		}			

	// 	}else{
		   
	// 	    $this->load->view('include/header');
	// 	    $this->load->view('include/navbar');  
	// 	    $data['action'] = 'inicio/inscripcion';
	// 	    $data['message'] =	'<b>ATENCION: LAS ENTRADAS ESTÁN AGOTADAS</b>'; 
              
	// 	    $this->load->view('vista_inscripcion',$data);
		
	//      	$this->load->view('include/footer');	
	// 	}
		
	// }
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
	
	
	function envia_email($destino){
		$this->load->library('email');
        //var_dump($destino);
		
        
        $config = array();
                $config['useragent']           = "CodeIgniter";
                $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
                $config['protocol']            = "smtp";
                $config['smtp_host']           = "localhost";
                $config['smtp_port']           = "25";
                $config['mailtype'] = 'html';
                $config['charset']  = 'utf-8';
                $config['newline']  = "\r\n";
                $config['wordwrap'] = TRUE;

                $this->load->library('email');

                $this->email->initialize($config);		
		
	    $this->email->from('contacto@manesensanjuan.com.ar', "Conferencia Dr. Facundo Manes");
        $this->email->set_mailtype('html');
      
        $dest = array();
	    //$dest[] = "vbordon@sanatorioargentino.com.ar ";
	    //$dest[] = "paraya@sanatorioargentino.com.ar ";
	    //$dest[] = "wcristian.gonzalez@gmail.com";
	    //$dest[] = "seba.avila88@gmail.com";
		$dest[] = "contacto@manesensanjuan.com.ar";
	    $this->email->to($destino);
		$this->email->bcc($dest);
	    $this->email->subject('Conferencia Dr. Facundo Manes - PREINSCRIPCION CONFIRMADA');
	    $msj = "<H4>SU PREINSCRIPCION HA SIDO CONFIRMADA. <br /> ";
	    $msj .= "Consulte desde la pagina web los puntos de entrega y retire su entrada desde el 20 de Mayo al 02 de Junio.<br /><br />";
	    $msj .= "Para mas información ingrese a <a href='http://manesensanjuan.com.ar' TARGET=´'_blank' >www.manesensanjuan.ar</a> <br /><br />";
	    $msj .= "<center>Saludos Cordiales.</center></h4>";
	    $this->email->message($msj);
	    if($this->email->send()){
			
	        return 1;
	    }
	    else{
			
	        return 0;
	    }
	}
	
	function guia_usuario(){
		$your_pdf_file = base_url('assets/img/GuiadeUsuarioPadresNivelInicial.pdf');
		//var_dump($your_pdf_file);
		
		
		$this->output
           ->set_content_type('application/pdf')
           ->set_output(file_get_contents($your_pdf_file));
	}
}