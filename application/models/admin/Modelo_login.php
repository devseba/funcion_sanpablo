<?php

    

    defined('BASEPATH') OR exit('No direct script access allowed');



    class Modelo_login extends CI_Model {



        public function __construct()

        {

            // Call the CI_Model constructor

            parent::__construct();

            $this->load->database();

        }



        public function validarUsuario($datos){
            $query = $this->db->get_where('users', $datos);
            if($query->num_rows()> 0){
                return true;
            }
            else{
                return false;
            }

        }

	}