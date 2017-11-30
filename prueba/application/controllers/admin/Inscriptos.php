<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Inscriptos extends CI_Controller
{ 
     function __construct()
     {
          parent::__construct();
          if(!$this->session->userdata("email")){
               redirect("admin/login");
          }          
          $this->load->model("admin/modelo_login");
          $this->load->model("admin/modelo_inscriptos");
     }

     public function index(){          
          $this->load->view('include/header_admin');
          $this->load->view('include/navbar_admin');
          $inscriptos = $this->modelo_inscriptos->getInscriptos();
          //obtengo la cantidad de entradas que se han retirados
          $cantidad = $this->modelo_inscriptos->get_cantidad_retiro_entradas();
          $data["entradas_retiradas"] = $cantidad;
          $data["inscriptos"] = $inscriptos["query"];
          $this->load->view("admin/listado_inscriptos",$data);
          $this->load->view('include/footer_admin');      
     }

     public function exportar(){
          $inscriptos = $this->modelo_inscriptos->getInscriptos();
          $this->to_excel($inscriptos, "listado_inscriptos");
     }

     function to_excel($sql, $filename)
     {
          $headers = ''; // just creating the var for field headers to append to below
          $data = ''; // just creating the var for field data to append to below
      
          $obj =& get_instance();
      
          $query = $sql["query"];
      
          $fields = $sql["fields"];
      
          if ($query->num_rows() == 0) {
               echo '<p>The table appears to have no data.</p>';
          } else {
              $headers ="LISTADOS INSCRIPTOS \n\n";              
			  foreach ($fields as $field) {
                  $headers .= $field->name . "\t";
               }
              
               $i = 1;
               foreach ($query->result() as $row) {
                    $line = $i."\t";                    
                    foreach($row as $value) {                                            
                         if ((!isset($value)) OR ($value == "")) {
                              $value = "\t";
                         } else {
                              $value = str_replace('"', '""', $value);
                              $value = '"' . $value . '"' . "\t";
                         }
                         $line .= $value;
                    }
                    $i++;
                    $data .= trim($line)."\n";
               }
      
               $data = str_replace("\r","",$data);
      
               header("Content-type: application/x-msdownload");
               header("Content-Disposition: attachment; filename=$filename.xls");
               echo mb_convert_encoding("$headers\n$data",'utf-16','utf-8');
          }
     }
	 
	 function retiro_entrada(){
		if($_POST){
			
		    if($this->modelo_inscriptos->retiro_entrada($_POST)){
				
				$cantidad = $this->modelo_inscriptos->get_cantidad_retiro_entradas();
				$data =  array(
                   				'status' => TRUE,
	                            'message' => $cantidad
                            );   
			}else{
				//echo false;
				$cantidad = $this->modelo_inscriptos->get_cantidad_retiro_entradas();
				$data =  array(
                   				'status' => TRUE,
	                            'message' => $cantidad
                        ); 
			}
			echo json_encode($data);
		}
		 
	 }
	 //----------------------------------------------------
	 function is_docente(){
		if($_POST){
			
		    if($this->modelo_inscriptos->is_docente($_POST)){
				$data =  array(
                   				'status' => TRUE,
	                            'message' => 'es docente'
                            );   
			}else{
				
				$data =  array(
                   				'status' => FALSE,
	                            'message' => 'No es docente'
                        ); 
			}
			echo json_encode($data);
		}
		 
	 } 
}