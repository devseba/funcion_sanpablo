<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Asientos extends CI_Model

{

	function __construct()

	{

		parent::__construct();

	}

	// Listado de butacas

	function asientos_List(){



    $this->db->select('tbl_butaca.*');

    $this->db->from('tbl_butaca');

    //$this->db->limit(600);

    $query = $this->db->get();

    return $query->result_array();

	}



  function getReservas($dni){



    $doc = $dni['dato'];



    // echo "Dni de alumono:";

    // var_dump($dni);



    $this->db->select('tbl_butaca.id_butaca');

    $this->db->from('deta_reserva');

    $this->db->join('tbl_reserva', 'tbl_reserva.id_reserva = deta_reserva.id_reserva');

    $this->db->join('tbl_butaca', 'deta_reserva.id_butaca = tbl_butaca.id_butaca');

    $this->db->where('tbl_butaca.estado ', 'RE');

    $this->db->where('tbl_butaca.id_butaca <=', 600);

    $this->db->where('tbl_reserva.dni_alumno', $doc);

    $query = $this->db->get();



    $ids = array();

    $ids['butaca'] = $query->num_rows();



    // echo "Butacas reservadas en modelo";

    // var_dump($ids['butaca']);



    $this->db->select('tbl_butaca.id_butaca');

    $this->db->from('deta_reserva');

    $this->db->join('tbl_reserva', 'tbl_reserva.id_reserva = deta_reserva.id_reserva');

    $this->db->join('tbl_butaca', 'deta_reserva.id_butaca = tbl_butaca.id_butaca');

    $this->db->where('tbl_butaca.estado ', 'RE');

    $this->db->where('tbl_butaca.id_butaca >', 600);

    $this->db->where('tbl_reserva.dni_alumno',$doc);

    $query = $this->db->get();

    $ids['pullman'] = $query->num_rows();



    // echo "Pullman reservados";

    // var_dump($ids['pullman']);

    return $ids;

  }

  function getReservasRetiradas($dni){



    $doc = $dni['dato'];



    // echo "Dni de alumono:";

    // var_dump($dni);



    $this->db->select('tbl_butaca.id_butaca');

    $this->db->from('deta_reserva');

    $this->db->join('tbl_reserva', 'tbl_reserva.id_reserva = deta_reserva.id_reserva');

    $this->db->join('tbl_butaca', 'deta_reserva.id_butaca = tbl_butaca.id_butaca');

    $this->db->where_in('tbl_butaca.estado ', array('RE','RT'));

    $this->db->where('tbl_butaca.id_butaca <=', 600);

    $this->db->where('tbl_reserva.dni_alumno', $doc);

    $query = $this->db->get();



    $ids = array();

    $ids['butaca'] = $query->num_rows();



    // echo "Butacas reservadas en modelo";

    // var_dump($ids['butaca']);



    $this->db->select('tbl_butaca.id_butaca');

    $this->db->from('deta_reserva');

    $this->db->join('tbl_reserva', 'tbl_reserva.id_reserva = deta_reserva.id_reserva');

    $this->db->join('tbl_butaca', 'deta_reserva.id_butaca = tbl_butaca.id_butaca');

    $this->db->where_in('tbl_butaca.estado ', array('RE','RT'));

    $this->db->where('tbl_butaca.id_butaca >', 600);

    $this->db->where('tbl_reserva.dni_alumno',$doc);

    $query = $this->db->get();

    $ids['pullman'] = $query->num_rows();



    // echo "Pullman reservados";

    // var_dump($ids['pullman']);

    return $ids;

  }

  // Devuelve id de relacion asiento/fila

  function getIdAsientos($data){



    $id_fila = $data['fila'];

    $id_asiento = $data['asiento'];

    $this->db->select('tbl_butaca.id_butaca');

    $this->db->from('tbl_butaca');

    $this->db->where('tbl_butaca.fila', $id_fila);

    $this->db->where('tbl_butaca.nro_butaca', $id_asiento);

    $this->db->where('tbl_butaca.estado','D');

    $query = $this->db->get();

    $id = $query->row('id_butaca');

    if (isset($id))
    {
      return $id;

    }

    else
    {
      return 0;

    }

  }



  // Cambia Estados en componenteequipos

  function updateEstado($id, $estado){



    $this->db->set('estado', $estado);

    $this->db->where('id_butaca',$id);

    $this->db->update('tbl_butaca');

  }



  // Info de la reserva

  function setAsientos($dni){



    $reserva = array(

        'dni_alumno' => $dni,  // guarda dni del alumno

        'fecha_hora' => date('Y-m-d H:i:s'),  // fecha y hora del server

        'id_entrada' => 0,   //guarda dni del tutor

        'estado' => 'RE'

    );

    $this->db->insert('tbl_reserva', $reserva);

    $idInsert = $this->db->insert_id();

    return $idInsert;

  }



  // Detalle de la reserva

  function setDetaAsientos($id_insert,$id_relacion){

    // cargo estado para guardar

    $estado = 'RE';

    // guarda el detareserva

    $data = array(

                 'id_reserva' => $id_insert,

                 'id_butaca' => $id_relacion

             );

    $this->db->insert('deta_reserva', $data);



    //actualizael estado de la butaca

    $this->updateEstado($id_relacion,$estado);

    return true;

  }



  function getimprimir($dn){



    $fehoy=date('Y-m-d ');



    $this->db->select('*');

    $this->db->from('tbl_butaca');

    $this->db->join('deta_reserva', 'deta_reserva.id_butaca = tbl_butaca.id_butaca');

    $this->db->join('tbl_reserva', 'tbl_reserva.id_reserva = deta_reserva.id_reserva');

    $this->db->where('tbl_reserva.dni_alumno', $dn);

    $this->db->where_in('tbl_butaca.estado',array('RE'));

    //$this->db->where('tbl_reserva.fecha_hora', $fehoy);

    $query = $this->db->get();

    if ($query->num_rows()!=0){

         return $query->result_array();

    }

  }

  // devuelve id butaca y estado
  function confDisponibles($data){

    $id_fila = $data['fila'];
    $id_asiento = $data['asiento'];
    $this->db->select('tbl_butaca.id_butaca, tbl_butaca.estado');
    $this->db->from('tbl_butaca');
    $this->db->where('tbl_butaca.fila', $id_fila);
    $this->db->where('tbl_butaca.nro_butaca', $id_asiento);
    $query = $this->db->get();
    $asientos = $query->result_array();

    if (isset($asientos))
    {
      return $asientos;
    }
    else
    {
      return 0;
    }
  }


}