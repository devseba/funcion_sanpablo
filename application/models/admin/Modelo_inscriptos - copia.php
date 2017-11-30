<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Modelo_inscriptos extends CI_Model {

        public function __construct()
        {
            // Call the CI_Model constructor
            parent::__construct();
            $this->load->database();
        }

        public function getInscriptos(){
            $fields = $this->db->field_data('asiste');
            $query = $this->db
                        ->select('apellido,
                                nombre,
                                dni,
								correo,
                                IF(sexo = "m","masculino","femenino") sexo,
								telefono')
								
                        ->get('asiste');
			/*$query = $this->db
                        ->select('apellido,
                                nombre,
                                correo,
                                dni,
								telefono,
                                sexo ')
                        ->get('asiste');*/
			
            return array("fields" => $fields, "query" => $query);   
        }
	}