<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inscriptos extends CI_Model{    
    
    function __construct(){
      parent::__construct();
    }   
    
    function getInscriptos(){
        return $this->db->get('asiste');        
    }
    //-----------------------------------------------------
    function inscribir($dnia){
        $result= $this->checked_inscripto($dnia);
        $_SESSION['dni_alumno'] = $dnia;
       // $_SESSION['dni_tutor'] = $dnit;
        if($result ==true){
            //$query = $this->db->insert("tbl_entrada",$campos_post);
            return true;
        }else{
             return false; 
        }


    }  
    //-----------------------------------------------------
    function checked_inscripto($dnia){

        $sql_user = "SELECT * 
                    FROM alumnos 
                    JOIN inscripciones ON inscripciones.alumno= alumnos.legajo 
                    JOIN divisiones ON divisiones.codigo=inscripciones.division
                    JOIN anios ON anios.codigo=divisiones.anio
                    JOIN niveles ON niveles.codigo=anios.nivel
                    WHERE alumnos.documento = '$dnia' AND inscripciones.cicloa=2017 AND niveles.codigo=1 ";
        $query_user= $this->db->query($sql_user);
        if($query_user->num_rows() > 0){  // si existe el alumno.
             return true;
        }else{
             return false;
         }
        // if ($query_user->num_rows()!=0)
        // {
        //     return $query_user->result_array();  
        // }
        // else
        // {   
        //     return false;
        // }
    }
    
    
    
}


?>


