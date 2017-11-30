<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Asiento extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model('Asientos');

	}

	// METODO LOCAL

	public function index(){



	 	$data['list'] = $this->Asientos->asientos_List();

	 	//$data['permission'] = $permission;



         $this->load->view('asientos/view_',$data);

	 }

	public function getReserva(){

	 	$response = $this->Asientos->getReservas($this->input->post());

	 	if($response){

	 		$arre[]=$response;

	 	}

	 	//echo "butacas";

	 	//var_dump($response);

	 	echo json_encode($arre);

	}


	public function getReservaRetirada(){

	 	$response = $this->Asientos->getReservasRetiradas($this->input->post());

	 	if($response){

	 		$arre[]=$response;

	 	}

	 	//echo "butacas";

	 	//var_dump($response);

	 	echo json_encode($arre);

	}

	public function setAsiento(){



		// cabecera de reserva

		$data = $this->input->post();

		$dni = array_shift($data);

		$id_insert= $this->Asientos->setAsientos($dni);

		$tam = count($data);

		$tam = $tam - 1;

		$x=0;

		$estado = "true"; 
		$this->db->trans_begin();
		for ($i=0; $i < $tam; $i+=2) {

			// $fila =  $x."fila";

			// $asiento = $x."asiento";

			$fila =  $x."fila";

			$asiento = $x."asiento";



			$a['fila']= $data[$fila];

			$a['asiento']= $data[$asiento];



			// traigo id relacion de asiento y fila

			$id_relacion = $this->Asientos->getIdAsientos($a);

			if($id_relacion != 0){
				// guarda el detalle de la reserva y actualiza estado

				$response = $this->Asientos->setDetaAsientos($id_insert,$id_relacion);				
			}
			else{
				// coloco estado en 0 quiere decir que ya esta ocupado

				$estado = "false";
			}

			// indice para nombre de fila y asiento

			$x+=1;

		}
		//var_dump($tam);
		if ($this->db->trans_status() === FALSE || $estado == "false")
		{
		        $this->db->trans_rollback();
		}
		else
		{
		        $this->db->trans_commit();
		}		

		echo $estado;
	}



	public function getimprimir(){



		$dn=$_POST['dni'];

		//$asiento1=$_POST['asiento'];





		$result = $this->Asientos->getimprimir($dn); //id de butaca 1

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

	public function confDisponible(){

		$response = true;

		// limpia array de otros datos
		$data = $this->input->post();
		$dni = array_shift($data);
		$tam = count($data);
		$tam = $tam - 1;

		$x=0;
		for ($i=0; $i < $tam; $i+=2) {

			$fila =  $x."fila";
			$asiento = $x."asiento";
			$a['fila']= $data[$fila];
			$a['asiento']= $data[$asiento];

			// traigo id relacion de asiento y fila
			$estButaca = $this->Asientos->confDisponibles($a);

			// si hay reserva o retiradas devuelve true
			 if (($estButaca[0]['estado'] == 'RE') || ($estButaca[0]['estado'] == 'RT')) {
			 	$response =  false;
			 	break;
			 }

			// indice para nombre de fila y asiento
			$x+=1;
		}

		echo json_encode($response);
	}

}