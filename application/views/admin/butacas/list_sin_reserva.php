<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<script src="<?=base_url('assets/js/jquery.dataTables.min.js');?>" type="text/javascript"></script>

        <div class="container" >         

          <div class="row" style="background-color: #fff;">

            <div class="well" id="cajaform">

              <div class="phead">



                <center>

                  <h2><p class="pull-left">Listado de alumnos </p></h2>

                </center>

                <br>

                <div  style="float:left;">

                  <h5 ><p class="pull-left"  >NIVEL INICIAL </p></h5>

                </div>

                  <?php

                    echo '<button  class="btn btn-primary pull-right" style="width: 150px; margin-top: 15px;" onclick="ver_ubicaciones()">VER UBICACIONES</button>';

                  ?>

              </div>

              <br><br><br>

              <div class="pbody">

      

              <table id="tabla_inscriptos" class="display" cellspacing="0" border="0">

                <thead>

                  <tr>                

                    <th style="text-align: center">Apellido y Nombre</th>

                    <th style="text-align: center">DNI</th>

                    <th style="text-align: center">Sexo</th>                    

                  </tr>

                </thead>

                <tbody>

                  <?php

                      //var_dump($list);

                      $f='F';

                      $m='M';

                      $s='SI';

                      $n='NO';

                      foreach($list as $a){ 

                          $dnia=$a['documento'];

                       

                      

                              echo '<tr id="'.$dnia.'" >';

                             

                              echo '<td class="maquin"style="text-align: center">'.$a['apellido'].', '.$a['nombre'].'</td>';

                              echo '<td style="text-align: center">'.$a['documento'].'</td>';

                              if ( $a['sexo'] ==1 ) {

                                  echo '<td style="text-align: center">'.$f.'</td>';  

                              }

                              else{

                                  echo '<td style="text-align: center">'.$m.'</td>';  

                                } 

                              echo '</tr>';



                        //}

                      }



                  ?>

                </tbody>

                

              </table>

            </div>

          </div>

        </div><!-- /.box-body -->

  



<script>

var gltr="";

var glnu="";

function mostrar_datos(id){
      var idr = id;

      console.log("Traigo los datos de la familia y reserva");

      console.log("Id de reserva");

      console.log(idr);  

        $.ajax({

          type: 'POST',

          data: { idr: idr},

          url: '<?php echo base_url(); ?>admin/Butaca/datosfamilia', //index.php/

          success: function(data){
                  console.log(data);

                  //console.log(data['descripcion']);

                 // console.log(data['dni_alumno']);

                  //console.log(data['datos'][0]['dni_alumno']);

                  $("#noal").val(data['datos'][0]['nom']+' '+data['datos'][0]['apell']);

                  //$("#apal").val(data['datos'][0]['apell']);

                  $("#dnialu").val(data['datos'][0]['doc']);

                  //$("#sexo").val(data['datos'][0]['sexo']);

                  //$("#dom").val(data['datos'][0]['domicilio']);

                  $("#not").val(data['datos'][0]['nombre']+' '+data['datos'][0]['apell']);

                 // $("#apt").val(data['datos'][0]['apellido']);

                  $("#dnit").val(data['datos'][0]['documento']);

                  $("#telt").val(data['datos'][0]['telefono_particular']);

                  $("#emt").val(data['datos'][0]['email']);

                  //$("#fe").val(data['datos'][0]['fecha_nac']);

                  for(var i=0; i < data['reserva'].length ; i++){



                    if (data['reserva'][i]['estado']=='RE'){

                      var estado='Reservado';

                    }

                    else{

                      if (data['reserva'][i]['estado']=='RT'){

                      var estado='Retirado';

                      }



                    }

                    if (data['reserva'][i]['estado']!=='AN'){

              

                      var  table= "<tr id='"+i+"'>"+  

                      

                                    "<td style='text-align: center'>"+data['reserva'][i]['fila']+"</td>"+

                                   "<td style='text-align: center'>"+data['reserva'][i]['nro_butaca']+"</td>"+

                                   "<td style='text-align: center'>"+estado+"</td>"+

                                   

                                 "</tr>";

                      $('#tabla').append(table); 

                    }

                        

                  }

                  console.log(table);

                },

            

          error: function(result){

                

                console.log(result);

              },

              dataType: 'json'

        });
}

function retirar_reserva(id){
      var idr = id;

      //var dn = $(this).parent('td').parent('tr').attr('class');

      console.log("Id de reserva");

      console.log(idr);

      // console.log("Dni de alumno");

      // console.log(dn);  
}

$(document).ready(function(event) {

    //Ver datos de la familia del alumno - .ion-android-list

    $(".list").on("click", function (e) {        

      var idr = $(this).parent('td').parent('tr').attr('id');

      console.log("Traigo los datos de la familia y reserva");

      console.log("Id de reserva");

      console.log(idr);  

        $.ajax({

          type: 'POST',

          data: { idr: idr},

          url: '<?php echo base_url(); ?>admin/Butaca/datosfamilia', //index.php/

          success: function(data){

                                    

                  console.log(data);

                  //console.log(data['descripcion']);

                 // console.log(data['dni_alumno']);

                  //console.log(data['datos'][0]['dni_alumno']);

                  $("#noal").val(data['datos'][0]['nom']+' '+data['datos'][0]['apell']);

                  //$("#apal").val(data['datos'][0]['apell']);

                  $("#dnialu").val(data['datos'][0]['doc']);

                  //$("#sexo").val(data['datos'][0]['sexo']);

                  //$("#dom").val(data['datos'][0]['domicilio']);

                  $("#not").val(data['datos'][0]['nombre']+' '+data['datos'][0]['apell']);

                 // $("#apt").val(data['datos'][0]['apellido']);

                  $("#dnit").val(data['datos'][0]['documento']);

                  $("#telt").val(data['datos'][0]['telefono_particular']);

                  $("#emt").val(data['datos'][0]['email']);

                  //$("#fe").val(data['datos'][0]['fecha_nac']);

                  for(var i=0; i < data['reserva'].length ; i++){



                    if (data['reserva'][i]['estado']=='RE'){

                      var estado='Reservado';

                    }

                    else{

                      if (data['reserva'][i]['estado']=='RT'){

                      var estado='Retirado';

                      }



                    }

                    if (data['reserva'][i]['estado']!=='AN'){

              

                      var  table= "<tr id='"+i+"'>"+  

                      

                                    "<td style='text-align: center'>"+data['reserva'][i]['fila']+"</td>"+

                                   "<td style='text-align: center'>"+data['reserva'][i]['nro_butaca']+"</td>"+

                                   "<td style='text-align: center'>"+estado+"</td>"+

                                   

                                 "</tr>";

                      $('#tabla').append(table); 

                    }

                        

                  }

                  console.log(table);

                  // //Anular la reserva

                  // $(document).on("click",".ion-close-circled",function(){

                  //    $.ajax({

                  //       type: 'POST',

                  //       data: { idr: idr},

                  //       url: '<?php //echo base_url(); ?>admin/Butaca/BajaReserva', //index.php/

                  //       success: function(data){

                  //               console.log("Estoy anulando reserva");

                                                  

                  //               console.log(data);

                  //               $('.container').empty();

                  //               $(".container").load("<?php //echo base_url(); ?>admin/Butaca/cargardni");

                  //               //console.log(data['descripcion']);

                  //              // console.log(data['dni_alumno']);

                  //              // console.log(data['datos'][0]['dni_alumno']);

                              



                  //             },

                          

                  //       error: function(result){

                              

                  //             console.log(result);

                  //           }

                  //           //            dataType: 'json'

                  //     });

                  // });

                },

            

          error: function(result){

                

                console.log(result);

              },

              dataType: 'json'

        });

    });

    //Retirar reserva - Trae datos al modal

    $(".ion-checkmark-circled").click(function (e) {

      var idr = $(this).parent('td').parent('tr').attr('id');

      //var dn = $(this).parent('td').parent('tr').attr('class');

      console.log("Id de reserva");

      console.log(idr);

      // console.log("Dni de alumno");

      // console.log(dn);

    });  

   

});



</script>







  <div class="modal fade" id="modaldatos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modal-lg" role="document" style="width:80%" >

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> Datos de Reserva </h4> 

        </div>

        <div class="modal-body" id="modalBodydestAgre">

          

            <div class="col-sm-12 col-md-12">

             <center><label>ALUMNO</label></center>

              <table>

              <tr>

              <td>

                <div class="col-xs-3" >Nombre y Apellido:

                 

                  <input type="text" id="noal" name="noal" class="form-control">  

                </div>

              </td>

              <td>     

                <div class="col-xs-3">Dni de alumno:

                  <input type="text" id="dnialu" name="dnialu" class="form-control">

                </div>

              </td>

              </tr>

               

              <tr>

              <td>

 

                <center><label >TUTOR</label></center>

              </td>

              </tr>

              <tr>

              <td>

                <div class="col-xs-3">Nombre y Apellido

                  <input type="text" id="not" name="not" class="form-control" >     

                </div>

                </td>

                <td>

                <div class="col-xs-3">Dni:

                  <input type="text" id="dnit" name="dnit" class="form-control" >     

                </div>

                </td>

                </tr>

                <tr>

                <td>

                <div class="col-xs-3">Telefono Particular:

                  <input type="text" id="telt" name="telt" class="form-control" >     

                </div>

                </td>

                <td>

                <div class="col-xs-3">Email:

                  <input type="text" id="emt" name="emt" class="form-control" >     

                </div>

                </td>

              </tr>

             </table>



                <center><label>UBICACIÓN</label></center>

                <br>



                <table id="tabla"  class="table table-bordered table-hover">

                  <thead>                        

                    <tr> 

                                           

                      <th style="text-align: center">Fila </th>

                      <th style="text-align: center">Nro de butaca </th> 

                      <th style="text-align: center">Estado </th>

               

                    </tr>  

                  </thead>

                  <tbody>   

                  </tbody>

                </table>

                

            </div>

         

        </div>

      </div>

    </div>

  </div>  

<!--  Modal pregunta -->

  <div class="modal fade" id="imprimi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> COMPROBANTE </h4> 

        </div>

        <div class="modal-body" id="modalBodydestAgre">

            <p><label>¿Desea imprimir comprobante?</label></p>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar" onclick="">No</button>

          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="imprimir()" 

          id="btnSavedest">SI</button>

        </div>

      </div>

    </div>

  </div>



  <div class="modal fade" id="modalcambiar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document"  style="width: 80%">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> Cambiar Reserva </h4> 

        </div>

        <div class="modal-body" id="modalBodydestAgre">

          <div class="col-sm-12 col-md-12">

           <label>UBICACIÓN:</label>

            <br>

            <div class="col-xs-4"><label>Fila</label>

               <input type="text" id="fi" name="fi" class="form-control">

            </div>

            <div class="col-xs-4"><label>Nro de butaca</label>

              <input type="text" id="nu" name="nu" class="form-control" >   

              <input type="text" id="nu1" name="nu1" class="form-control" >    

            </div>

            <p>Para cambiar de abucación, tiene que anular la resva y volver a selecionar las butacas deseadas.</p> 

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="imprimir()" 

          id="btnSavedest">ANULAR </button>

        </div>



      </div>

    </div>

  </div>

<!--  Modal Entregar-->

  <div class="modal fade" id="entregareser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title" id="exampleModalLabel">Entrega de Reservas</h4>

        </div>

        <div class="modal-body">

          <form>

            <div class="form-group">

              <div class="col-sm-12 col-md-12">

                <p></p>

             <!--    <div class="col-xs-4">Dni de alumno

                  <select type="text" id="dni" name="dni" class="form-control" value=""> 

                  </select>    

                </div> -->

                <div class="form-group">

                  <label class="control-label">Ingrese DNI:</label>

                  <input type="text" class="form-control" id="dni_reserva" style="width: 50%;">

                </div>



                <table id="dnitabl" class="table table-bordered table-hover">

                  <thead>                        

                    <tr>  

                      <th style="text-align: center">Acción </th>                      

                      <th style="text-align: center">Fila </th>

                      <th style="text-align: center">Nro de butaca </th>  

                      <th style="text-align: center">Estado </th>                

                        

                    </tr>  

                  </thead>

                  <tbody>   </tbody>

                </table>   

              </div>               

            </div>

          </form>

        </div>

        <div class="modal-footer">

          <center>

            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="entregar_res()">ENTREGAR</button>

            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="anular()" >ANULAR</button>

          </center>

        </div>

      </div>

    </div>

  </div>
  <script>
    function ver_ubicaciones(){
    location.href = "<?php echo base_url(); ?>admin/Inscriptos";      
    }
  </script>

