   <div class="conteiner"> 
    <div class="col-xs-12" id="ubicacion" style="background-color: #fff;">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title" style="color: #000; ">Ubicaciones</h3>
          </br></br>
          <h5 style="color: #000; ">Referencias</h5>          
          <?php

           $userdata = $this->session->userdata('users');

            $usrId= $userdata[0]['username'];
           // var_dump($_SESSION);

        //  if( permisos){ permisos para el admin que os btn tengan accion 
              echo '<button type="button" class="btn btn-success btn-xs ref">Asientos Libres</button>';          
              echo '<button type="button" class="btn btn-primary btn-xs ref" id="reserva"   data-toggle="modal" data-target="#modallibre">Asientos Reservados</button>'; 
               echo '<button type="button" class="btn btn-danger btn-xs ref">Asientos ocupados</button>';        
              echo '<button type="button" class="btn btn-warning btn-xs ref">Entradas Retiradas</button>';

        //  }  else{
              // modal ingresa el dni del alumno y se cambia el estado de las butaas y de la reserva a Entregado
                if (isset($_SESSION['email'])){
                  if($_SESSION['email']=="admin@labtech.com"){
                 //echo '<button type="button" class="btn btn-info btn-xs ref" id="listado" onclick="listado()">Ver listado </button>';
               
                  //echo '<button type="button" class="btn btn-danger btn-xs ref">Anular Reserva</button>';

                    }
                }



          ?>
        
          
        </div><!-- /.box-header -->
        <div class="box-body" style="background-color: #fff;">   
        <br>
        <br>
        <p>
                                    <a class="btn btn-success btn-info pull-right" 
                                       href="<?=base_url("Asiento/cargarlista")?>">ver listado</a>
                                </p>

          
         <table id="customers" class="table table-bordered table-hover" style="color: #000; ">
             <thead>
               <tr>
                 
                 <th >FILAS</th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 
                 <th class="dark"></th> 
                 
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>                
               </tr>
             </thead>
             <tbody>            

            
             <?php           
                 echo '<tr id="" class="">';
                     $y = 14;
                     $z=0;

                     echo '<td class="" id="">';
                     echo "fila 1";
                     echo '</td>';

                     for($i=0; $i < count($list); $i++){

                       $butaca = ($list[$i]['nro_butaca']);

                                   
                         echo '<td class="'.$list[$i]['fila'].'" id="'.$list[$z]['nro_butaca'].'">';

                        switch ($list[$i]['estado']) {
                            case 'D':
                                echo '<img class="asiento" src="'.base_url().'/assets/img/D.png">'.$list[$z]["nro_butaca"].'';
                                break;
                            case 'O':
                                echo '<img class="asiento" src="'.base_url().'/assets/img/O.png">'.$list[$z]["nro_butaca"].'';
                                break;
                            case 'RE':
                                echo '<img class="asiento" src="'.base_url().'/assets/img/RE.png">'.$list[$z]["nro_butaca"].'';
                                break;
                            case 'RT':
                                echo '<img class="asiento" src="'.base_url().'/assets/img/RT.png">'.$list[$z]["nro_butaca"].'';
                                break;
                            case 'AN':
                               // echo '<img class="asiento" src="assets/img/sillon.png">'.$list[$z]["nro_butaca"].'';
                                break;    
                        }
                         echo '</td>';  
                        
                        if ($y == $i){
                            echo '<td class="dark">';
                            echo '</td>';
                            $y = $y+30;
                         }                        

                        if ($butaca%30 == 0){
                            echo '</tr>';
                            echo '<tr id="" class="">';

                           
                            if (($list[$i]['fila']<20) && ($list[$i]['fila']!==1)) {
                               
                               $f = $list[$i]['fila'] + 1;
                               echo '<td class="" id="">'; 
                               echo "fila ".$f;
                               echo '</td>';
                             }
                             
                         }

                         $z++;

                      }
                  echo '</tr>';
             ?>

             </tbody>
         </table>


        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div> <!-- /.row -->


<script>
    var cont = 0;
    var fila1;
    var asiento1;
    var fila2;
    var asiento2;

    // $("#listado").click( function (){
    //   //WaitingOpen();
    //    $("#conteiner").empty();
    //    $("#conteiner").load("<?php //echo base_url(); ?>Asiento/cargarlista/");
    //    //WaitingClose();
    //  });

   

    $(".asiento").click(function(){
        
        $(this).fadeOut();
        cont = cont+1;    
        if(cont == 1){

            fila1 = $(this).parent('td').attr('class');
            asiento1 = $(this).parent('td').attr('id'); 
        } else{
            fila2 = $(this).parent('td').attr('class');
            asiento2 = $(this).parent('td').attr('id');
            
            $("#1asiento").val(asiento1);
            $("#1fila").val(fila1);

            $("#2asiento").val(asiento2);
            $("#2fila").val(fila2);        

            $('#confirmar').modal('show');
        }

    });

    $("#btnCancelar").click(function(){
        cont = 0;
        fila1 = 0;
        asiento1 = 0;
        fila2 = 0;
        asiento2 = 0;
        $(".asiento").fadeIn('slow');
    });

    // $("#btnSavedest").click(function(){
    //     var data = $("#conform").serializeArray();
    //      $.ajax({
    //         type: 'POST',
    //         data: data,
    //         url: 'index.php/Asiento/setAsiento', 
    //         success: function(result){
                            
    //                 $('#confirmar').modal('hide');
    //                 setTimeout("cargarView('Asiento', 'index', '"+$('#permission').val()+"');",0);
                            
    //                     },
    //         error: function(result){
    //                     // WaitingClose();
    //                     alert("Ha habido un error de guardado...");
    //                 },
    //         dataType: 'json'
    //         });
    // });
 $("#reserva").click(function (e) { 
      $("#modallibre tbody tr").remove();   
      $.ajax({
          type: 'POST',
          data: {},
          url: '<?php echo base_url(); ?>/Asiento/asientos_reserva', //index.php/
          success: function(data){
                console.log("Asientos Reservados");           
                console.log(data);
                
              
                for (var i = 0; i < data.length; i++) {
                  if (data[i]['estado']== 'D'){
                  var estado= '<small class="label pull-left bg-green" style="text-align: center">Disponibles</small>';
                  }
                  else 
                    if (data[i]['estado']== 'RE'){
                    var estado= '<small class="label pull-left bg-blue" style="text-align: center">Reservados</small>';
                    }
                    else
                      if (data[i]['estado']== 'O'){ 
                      var estado= '<small class="label pull-left bg-red" style="text-align: center">Ocupados</small>';
                      }
                        else{ 
                          var estado= '<small class="label pull-left bg-yellow" style="text-align: center">Retiradas</small>';
                        }
                  var tr = "<tr >"+
                      
                      "<td style='text-align: center'>"+data[i]['fila']+"</td>"+
                      "<td style='text-align: center'>"+data[i]['nro_butaca']+"</td>"+
                     "<td style='text-align: center'>" +estado+"</td>";
                       
                      "</tr>";
                  $('#libre tbody').append(tr);

                }
                console.log(tr);
                },
            
          error: function(result){
                
                console.log(result);
              },
              dataType: 'json'
          });
  
    });

    function guardar(){
        var data = $("#conform").serializeArray();
        $.ajax({
            type: 'POST',
            data: data,
            url: '<?php echo base_url(); ?>/Asiento/setAsiento', 
            success: function(result){
                            
                    $('#confirmar').modal('hide');
                    //setTimeout("cargarView('Asiento', 'index');",0);
                    $('#ubicacion').empty();
                    $("#ubicacion").load("<?php echo base_url(); ?>/Asiento/index/");
                   // comprobante();        
                        },
            error: function(result){
                        // WaitingClose();
                        alert("Ha habido un error de guardado...");
                         //setTimeout("cargarView('Asiento', 'index');",0);
                    },
            dataType: 'json'
        });
    }
// function comprobante(){
//     $('#imprimi').modal('show');
//   }
function listado(){
    //   //WaitingOpen();
    $('#conteiner').empty();
       $("#conteiner").load("<?php echo base_url(); ?>Asiento/cargarlista/");
       //WaitingClose();
     }

</script>  

<style>
    .conf{
        border: none;
        width: 8%;    
    }
    /*.dark{
        background-color: red;
    }*/
    .ref{margin-left: 15px;}
    #confirmar{
        background-color: #fff !important;
        color: #000;    }
</style>
  <!--  Modal Guardar -->
  <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width: 40%">
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span><center> Confirmar</center></h4> 
        </div>
        <div class="modal-body" id="modalBodydestAgre">
            <p>Las butacas seleccionadas son: </p>
            <form id="conform" class="center">
                <label for="1fila">Fila: </label>
                <input class="conf" type="text" name="1fila" id="1fila" class="border-none">
                <label for="1asiento">Asiento: </label>
                <input class="conf" type="text" name="1asiento" id="1asiento" class="border-none"> </br>
                <label for="2fila">Fila: </label>
                <input class="conf" type="text" name="2fila" id="2fila" class="border-none">
                <label for="2asiento">Asiento: </label>
                <input class="conf" type="text" name="2asiento" id="2asiento"> 
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar" onclick="">Cancelar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="guardar()" 
          id="btnSavedest">Guardar</button>
        </div>
      </div>
    </div>
  </div>
<!-- /  Modal Agregar Destino-->
<!--  Modal pregunta -->
  <div class="modal fade" id="imprimi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> Comprobante </h4> 
        </div>
        <div class="modal-body" id="modalBodydestAgre">
            <p>¿Desea imprimir comprobante de reservación?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar" onclick="">No</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="imprimir()" 
          id="btnSavedest">SI</button>
        </div>
      </div>
    </div>
  </div>
<!-- /  Modal Agregar Destino-->
<!-- Modal Asientos libres --> 
  <div class="modal fade" id="modallibre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="width: 40%">
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span><label> Butacas </label></h4>
          </center>
          <br>
          
        </div> <!-- /.modal-header  -->


        <div class="modal-body">
        <p></p>

          <table id="libre" class="table table-bordered table-hover">
            <thead>                        
              <tr>                          
                <th style="text-align: center">Fila </th>
                <th style="text-align: center">Nro de butaca </th>  
                <th style="text-align: center">Estado </th>                
              
              </tr>  
            </thead>
            <tbody>   </tbody>
          </table>                  

        </div> <!-- /.modal-body -->

        <div class="modal-footer">  

            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button>
        </div>  <!-- /.modal footer -->
      </div> <!-- /.modal-content -->

    </div>  <!-- /.modal-dialog modal-lg -->
  </div>  <!-- /.modal fade -->
<!-- / Modal -->
