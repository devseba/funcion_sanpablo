<?php

class Model_inscriptos extends CI_Model{	
	
	function __construct(){
      parent::__construct();
    }	
    
    function getInscriptos(){
		return $this->db->get('asiste');		
	}

	function inscribir($campos_post){
           
        if(!$this->checked_inscripto($campos_post['dni'])){
            $query = $this->db->insert("asiste",$campos_post);
            return $query;
        }else{
            return false; 
        }
	}  
//-----------------------------------------------------
	function checked_inscripto($dni){
        $sql_user = "SELECT * FROM asiste WHERE dni = '".$dni."'";
         $query_user= $this->db->query($sql_user);
        if($query_user->num_rows() > 0){  // si existe el alumno.
            return true;
        }else{
          return false;
        }
	}
	
	/*function checked_inscripto($email){

        $sql_user = "SELECT * FROM asiste WHERE correo LIKE ? ";
        $query_user = $this->db->query($sql_user,array(
                                           '%'.$email.'%' 
                                            ) );             
        if($query_user->num_rows() > 0){  // si existe el alumno.
            return true;
        }else{
          return false;
        }
	}*/
//-------------------------------------------------------
	
}
?>



