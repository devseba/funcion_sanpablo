<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Butaca extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model('admin/Butacas');

	}



	public function index(){ //$permission

		$this->load->view('include/header_admin');

	  //$this->load->view('include/navbar_admin');

	 

		$data['list'] = $this->Butacas->asientos_List();

        $this->load->view('admin/butacas/view_',$data);

        $this->load->view('include/footer_admin');

	}

	public function ubicacion_view(){
		$data['list'] = $this->Butacas->asientos_List();
		$this->load->view('admin/butacas/view_ubicaciones',$data);
	}

	public function volver(){ //$permission
		 

		$this->load->view('include/header_admin');

        //$this->load->view('include/navbar_admin');

	  	$this->load->view('include/footer_admin');

	

		$data['list'] = $this->Butacas->asientos_List();

		//$data['permission'] = $permission;		

        $this->load->view('admin/butacas/view_',$data);

       

	}



	public function cargardni(){ 

		$this->load->view('include/header_admin');

	  //	$this->load->view('include/navbar_admin');

	  	$this->load->view('include/footer_admin');



		$data['list'] = $this->Butacas->asientos_List1(); 	

        $this->load->view('admin/butacas/list',$data); 

     

    }

	public function cargardni2(){

		$this->load->view('include/header_admin');

	  	$this->load->view('include/navbar_admin');

		$data['list'] = $this->Butacas->asientos_List3();

        $this->load->view('admin/butacas/list_sin_reserva',$data); 

        $this->load->view('include/footer_admin');     

    }    

	

	public function datosfamilia(){ 

 		$idb=$_POST['idr'];

		

	 	$result = $this->Butacas->datosfamilia($idb);



      	if($result){ 

        

	        $arre['datos']=$result;

	        $result2 = $this->Butacas->datosreserva($idb);

	       	if($result2){

	       		$arre['reserva']=$result2;

	       	}

		 	else {

		 		$arre['reserva']=0;

		 		

		 	}

	 	}

	 	echo json_encode($arre);

	 

	}

	public function getReserva(){

	 	

	 	$response = $this->Butacas->getReservas($this->input->post());

	 	

	 	if($response){

	 		$arre[]=$response;

	 	}

	 	//echo "butacas";

	 	//var_dump($response);

	 	echo json_encode($arre);	

	} 	

	// trae id relacion asiento/fia y guarda reserva segun cantidad 

	public function setAsiento(){

		

		// cabecera de reserva

		$data = $this->input->post();

		$dni = array_shift($data);

		$id_insert= $this->Butacas->setAsientos($dni);





		$tam = count($data);

		$tam = $tam - 1;



		$x=0;

		for ($i=0; $i < $tam; $i+=2) { 

			

			// $fila =  $x."fila";

			// $asiento = $x."asiento";

			$fila =  $x."fila";

			$asiento = $x."asiento";



			$a['fila']= $data[$fila];

			$a['asiento']= $data[$asiento];



			// traigo id relacion de asiento y fila

			$id_relacion = $this->Butacas->getIdAsientos($a);



			// guarda el detalle de la reserva y actualiza estado

			$response = $this->Butacas->setDetaAsientos($id_insert,$id_relacion);

			

			// indice para nombre de fila y asiento

			$x+=1;			

		}



		//var_dump($tam);





		echo "true";

	}



	public function asientos_reserva(){



	    $dat= $this->Butacas->getdatosreserva(); //traigo todos los datos 

	    echo json_encode($dat);

  	

	} 



	public function getimprimir(){



		$dn=$_POST['dni'];

		//$asiento1=$_POST['asiento'];

		



		$result = $this->Butacas->getimprimir($dn); //id de butaca 1

		 $arre=array();

		if($result)

		{	



			$arre['datos']=$result;

			//$butaca = $this->Asientos->getimprimirbu($fila2, $asiento2); //id de butaca 2

			// if($butaca)

			// {

			// 	$arre['butaca']=$butaca;

			// }

			// else $arre['butaca']=0;



			echo json_encode($arre);

		}

		else{

			$arre['datos']=0;

			echo json_encode($arre);			

		} 

	}



	public function traerbutaca(){

		

		$dn=$_POST['idgl'];

		$cantidad = $this->Butacas->traerbutacas($dn);

		if($cantidad)

		{	

			// $arre=array();

	        foreach ($cantidad as $row ) 

	        {   

	           $arre[]=$row;

	        }

			echo json_encode($arre);

		}

		else echo "nada";

	}

	//Trae dni - funcion traer_dni - listo

    public function TraerDNI(){

		$sector = $this->Butacas->TraerDNIs();
		//echo json_encode($sector);	

		if($sector){	
			$arre=array();
			//$arre['datos']=$sector;

	        foreach ($sector as $row ) 
	        
	        {   
	           $arre[]=$row;

	        }
	        //var_dump($arre);

			 echo json_encode($arre);

		}
		else echo "nada";
	}


	//Traer dni del autocompletar - no funciona

	public function getDni(){

		$response = $this->Butacas->getDnis();

      	echo json_encode($response);	

	}

	

	//Traer dni del autocompletar - no funciona

	public function getDocAlum(){

		$response = $this->Butacas->getDocAlumnos();

      	echo json_encode($response);

	}



	//Funcion entregar - view - listo

	public function RetirarEntrada(){

		

		$num=$_POST['idgl']; //dni del alumno

		$this->db->trans_start();



		$idbut= $this->Butacas->cambiarretirada($num);//cambiar el estado de la tabla reserva a RETIRADOsegun el dni del alumno

		$datos = array(

			       	 

			       	 'estado'=>'RT'

			        	 

		       		);

		$result= $this->Butacas->traerbutacaid($num); //Trae el id de butacas resrvadas segun el dni del alumno

		

	    foreach ($result as $row ){   

				$result1= $this->Butacas->updatebutu($row,$datos); //cambia el estado a retiradas en la tabla butaca

	    }



		$this->db->trans_complete();

      	if ($this->db->trans_status() === FALSE){

	          return false;  

	    }

	    else{

	          return true;

	       	}  

		

	}

	//Funcion anular - view 

	public function AnularReserva(){

		

		$num=$_POST['idgl']; //dni del alumno

		$this->db->trans_start();



	 	$datos = array(

			       	 

	 		       	 'estado'=>'AN'

			        	 

 	       		);

	 	$datos2 = array(

			       	 

	 		       	 'estado'=>'D'

			        	 

	 	       		);

	 	$res= $this->Butacas->AnularReservas($num);//cambiar el estado de la tabla reserva a anulado segun el dni del alumno

		$idb= $this->Butacas->TraerIdButaca($num); //Trae el id de butacas resrvadas segun el dni del alumno

		

	    foreach ($idb as $row ){   

			$result1= $this->Butacas->ModificarButaca($row,$datos2); //cambia el estado a diposibles en la tabla butaca

	    }



		$this->db->trans_complete();

    	if ($this->db->trans_status() === FALSE){

	           return false;  

     	}

	    else{

	           return true;

	    }  

		

	}



	//Funcion anular - list 

	public function BajaReserva(){

		

		$idr=$_POST['idr']; //dni del alumno

		$this->db->trans_start();



	 	$res= $this->Butacas->BajaReservas($idr);//cambiar el estado de la tabla reserva a anulado segun el dni del alumno

		$idb= $this->Butacas->TraerIdButacaR($idr); //Trae el id de butacas resrvadas segun el el id de reserva q tengo

		

	    foreach ($idb as $row ){   

			$result1= $this->Butacas->ModificarButacaR($row); //cambia el estado a diposibles en la tabla butaca

	    }



		$this->db->trans_complete();

    	if ($this->db->trans_status() === FALSE){

	           return false;  

     	}

	    else{

	           return true;

	    }  

		

	}



	//Funcion entregar - list 

	public function EntregarReserva(){

		

		$num=$_POST['idre']; //id de reserva 

		$this->db->trans_start();



		$idbut= $this->Butacas->cambiarestado($num);//cambiar el estado de la tabla reserva a RETIRADOsegun el dni del alumno



		$result= $this->Butacas->traeridb($num); //Trae el id de butacas resrvadas segun el id de reserva 

		

	    foreach ($result as $row ){   

				$result1= $this->Butacas->ModifButacaEn($row); //cambia el estado a retiradas en la tabla butaca

	    }



		$this->db->trans_complete();

      	if ($this->db->trans_status() === FALSE){

	          return false;  

	    }

	    else{

	          return true;

	       	}  

		

	}





	public function asientos_libres(){



	    $dat= $this->Butacas->getdatoslibres(); //traigo todos los datos 

	    echo json_encode($dat);

  	

	}



  //   public function traerimpre(){

  //   	$idbu=$_POST['gltr']; //id de butaca

		// $num=$_POST['glnu']; //numero de butaca



  //      $response = $this->Butacas->traerimpres($idbu,$num);

  //      echo json_encode($response);

  //   }



   

	public function asientos_ocupados(){



	    $dat= $this->Butacas->getdatosocupa(); //traigo todos los datos 

	    echo json_encode($dat);

  	

	}

	public function asientos_reservados(){



	    $dat= $this->Butacas->getdatoAsreserva(); //traigo todos los datos 

	    echo json_encode($dat);

  	

	}  

	public function asientos_retiradas(){



	    $dat= $this->Butacas->getdatosretira(); //traigo todos los datos 

	    echo json_encode($dat);

  	

	} 

	public function traerdatosbuaca(){

	 	$idbu=$_POST['idbutaca']; //id de butaca

		$num=$_POST['num']; //numero de butaca

		$dat= $this->Butacas->traerdatosbuaca($idbu,$num);

		return $dat;

	}




	

}