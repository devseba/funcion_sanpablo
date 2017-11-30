  <!-- <div class="row"> -->
    <div class="" id="ubicacion" style="background-color: #fff;float: left;">

      <div class="box">

        <div class="box-header">

          <center>

            <h3 class="box-title" style="color: #000; "> Reserva de Ubicaciones</h3>

          </center>

          <div class="row">
            <div class="col-xs-12 col-md-12" style="width:1200px;">
              <div  class="col-md-4" style="float:left; width:60%;">
               <H5 style="color: #000; "><label>Pasos para reservar Ubicaciones:</label></H5>
                <H5 style="color: #000; ">1- Hacer click sobre las butacas que desea reservar (considerando fila y asiento que desea).</H5>
                <H5 style="color: #000; ">2- De las filas 1 a la 20, cada alumno solo puede reservar y retirar 3 entradas con su DNI. Mientras que en las ubicaciones pullman, de las filas 21 a 28 se podr&aacute;n reservar hasta 4.</H5>
                <H5 style="color: #000; ">3- Una vez finalizado, presionar el bot&oacute;n GUARDAR RESERVA donde ver&aacute; las reservas realizadas.</H5>

                <label  style="color: #fff; " > <span class="label label-default">Valor de Entrada:</span></label>
                <H5 style="color: #000; ">Fila 1 a 10 (Ubicaciones Bajas): $150</H5>
                <H5 style="color: #000; ">Fila 11 a 20 (Ubicaciones Bajas): $150</H5>
                <H5 style="color: #000; ">Filas 21 a 28 (Secci&oacute;n Pullman - Altas): $100</H5>
              </div>
              <div  class="col-md-4" style="float:left; width:400px;">
              </div>

              <div  class="col-md-4 pull-right"  style="float:right; width:400px;">
                <label style="color: #000; ">Referencias:</label>
                    <?php

                      echo '<div>
                              <button type="button" class="btn btn-success enlinea" style="width:20px; height:15px;" data-toggle="modal" data-target="#modalasiento" id="libre"></button>
                              <label  style="color: #000;display:inline-block" class="enlinea">Asientos libres</label>
                            </div>';

                      echo '<div>
                              <button type="button" class="btn btn-danger enlinea" style="width:20px; height:15px;" data-toggle="modal" data-target="#modalasiento" id="ocupado"></button>
                              <label  style="color: #000;" class="enlinea"> &nbsp;Asientos Ocupados</label>
                            </div>';

                      echo '<div>
                              <button type="button" class="btn btn-primary enlinea" style="width:20px; height:15px;" data-toggle="modal" data-target="#modalasientores" id="res"></button>
                              <label  style="color: #000; " class="enlinea"> &nbsp;Asientos Reservados<br></label>
                            </div>';

                      echo '<div>
                              <button type="button" class="btn btn-warning enlinea" style="width:20px; height:15px;" data-toggle="modal" data-target="#modalasientores" id="enretirada"></button>
                              <label  style="color: #000; " class="enlinea"> &nbsp;Entradas Retiradas<br></label>
                            </div>';

                      echo '<br>';

                     // echo '<ion-footer-bar class="pull-right">';

                      //echo '<button type="button" class="btn btn-primary pull-right" id="listado" onclick="listado()" style="float: left;"> VER LISTADO </button>';

                      //echo '<button type="button" class="btn btn-primary pull-right"    data-toggle="modal" data-target="#entrega"  style="float: right;"> ENTREGAR RESERVA</button>';
                      //echo '</ion-footer-bar>';

                    ?>

              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-xs-12 col-md-12">

              <div  class="col-md-4" style="margin: 20px;">
                <center>
                  <?

                    echo '<button type="button" class="btn btn-primary" id="listado" onclick="listado()"> VER LISTADO </button>';

                    echo "&nbsp;";

                    echo '<button type="button" class="btn btn-primary" id="listado" onclick="listado_sin_reserva()"> ALUMNOS SIN RESERVAS</button>';

                    echo "&nbsp;";

                    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#entrega"> ENTREGAR RESERVA</button>';                  
                  ?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserva" disabled="disabled">NUEVA RESERVA</button>
                  <!--class="btn btn-success ref"-->
                  <button type="button" class="btn btn-primary" onclick="verReserva()" disabled="disabled">CONFIRMAR RESERVA</button>
                  <button type="button" class="btn btn-primary" onclick="ver_comprobante()" disabled="disabled">VER COMPROBANTE</button>

                </center>
              </div>
               <div  class="col-md-4" style="margin: 20px;display: none">
                <label for="click_bajo" id="bajo" style="color: #000; ">Cantidad Reservada en Ubicaci&oacute;n Baja:</label>

                <input type="text" name="" id="click_bajo" style="border: none; width: 10px; padding-left: 10px;" style="color: #000">

                <input type="text" id="click2" name="" value=" de  3" style="border: none;">

                </br>

                <label for="click_alto" style="color: #000; ">Cantidad Reservada en Ubicaci&oacute;n  Pullman:</label>

                <input type="text" name="click_alto" id="click_alto" style="border: none; width: 10px; padding-left: 10px;" style="color: #000; ">

                <input type="text" id="alto2" name="" value=" de  4" style="border: none;" style="color: #000; ">

              </div>
              <br>
              <!--<div class="pull-right" >-->
            </div>
          </div>
          <span class="badge badge-info" style="font-size: 18px;padding:15px 5px 15px 5px">
            <strong>TOTAL RECAUDADO:</strong> $ <?=number_format($total_recaudado,2,",",".")?>
          </span> 
          <br><br>         
          <center>

            <!-- <h5 class="box-title" style="margin: 20px;"><label style="color: #000; ">Ubicaciones a seleccionar</label></h5> -->

          </center>

        </div><!-- /.box-header -->

        <div class="box-body" style="background-color: #fff;" id="ubicacion2">
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

                   <th></th>

                 </tr>

              </thead>

              <tbody>



               <?php

                   echo '<tr id="" class="">';

                       $y = 14;

                       $z=0;



                       // pone el primer td fila

                       echo '<td class="" id="">';

                       echo "fila 1";

                       echo '</td>';



                       for($i=0; $i < count($list); $i++){



                          // guarda el num de butaca

                          $butaca = ($list[$i]['nro_butaca']);



                          echo '<td class="'.$list[$i]['fila'].'" id="'.$list[$z]['nro_butaca'].'">';



                          // muestra cada butaca con imagen s/ estado

                          switch ($list[$i]['estado']) {

                              case 'D':

                                  echo '  <img class="asiento habilitada" title="$ 150" src="'.base_url().'assets/img/D.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                              case 'O':

                                  echo ' <img class="asiento" title="$ 150" src="'.base_url().'assets/img/O.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                              case 'RE':

                                  echo ' <img class="asiento" title="$ 150" src="'.base_url().'assets/img/RE.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                              case 'RT':

                                  echo '<img class="asiento" title="$ 150" src="'.base_url().'assets/img/RT.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                              case 'AN':

                                 // echo '<img class="asiento" src="assets/img/sillon.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                          }

                           echo '</td>';

                          // dibuja el pasillo cada 30 filas, la primera vez despues de las 14 butacas

                          if ($y == $i){

                              echo '<td class="pasillo">';

                              echo '</td>';

                              $y = $y+30;

                           }



                          // si la butaca es la 30 cierra el </tr> y abre el siguiente

                          if ($butaca%30 == 0){

                              echo '</tr>';

                              echo '<tr id="" class="">';



                             if($list[$i]['id_butaca'] == 600){

                                echo '<td class="" id="">';

                                echo '</td>';

                               }



                              echo '</tr>';

                              echo '<tr id="" class="">';



                              // mientras la fila sea menor a 20 inserta el <td> fila con el numero de la fila

                              if (($list[$i]['fila']<28) && ($list[$i]['fila']!==1)) {



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

  <!-- </div> --><!-- /.row -->

<script>

  var but =[] ;
  var fil =[] ;

  // para 'name' de fila y asientos en modal dinamico
  var cont = 0;

  // para cambiar valor de input ubicaciones
  var acumclick_alto = 0;
  var acumclick_bajo = 0;

  // asiento y fila para guardar en cada click
  var fila = 0;
  var asiento = 0;

  // contador de clicks butaca y pullman
  var click_but = 0;
  var click_pull = 0;

  // butacas y pullman reservados
  var b_r_o = 0;
  var p_r_o = 0;
  var but_res = 0;
  var pull_res = 0;

  // contadores butacas y pullman seleccionados
  var contbut = 0;
  var contpull = 0;


    //var dni = 123;

$(document).ready(function(event) {
  // trae las reservas por dni de alumno
  // selecciona las butacas limitadas por reservas
  $(".habilitada").click(function(){

      // oculta la butaca al hacer click
      $(this).fadeOut();

      // guarda asiento y fila en cada click
      fila = parseInt($(this).parent('td').attr('class'));
      asiento = parseInt($(this).parent('td').attr('id'));

      // si hay dos butacas reservadas antes
      //if ((fila <= 20) && (but_res >= 2)){
      if ((fila <= 20) && (but_res >= 3)){
        alert("Usted reservo la cantidad maxima de asientos permitidos...");
        $(this).fadeIn('slow');
        return;
      }

      // si hay seis pullman reservadas antes
      if ((fila > 20) && (pull_res == 4)){
        alert("Ya tiene el maximo de pullman reservados...");
        $(this).fadeIn('slow');
        return;
      }

      // si hay menos de 2 asientos reservados
      //if ((fila <= 20) && (but_res < 2)){
      if ((fila <= 20) && (but_res < 3)){

          // sumo un click para cambiar dinamicamente el input cant de reservas
          click_but ++;
          // cambio el valor del input cant de entradas
          $("input#click_bajo").val(click_but);



          $("form#conform").append('<label for="1fila">Fila: </label>');
          $("form#conform").append('<input class="conf" type="text" name="'+cont+'fila" id="fila" value="'+fila+'">');
          fil.push(fila);



          $("form#conform").append('<label for="1asiento">Asiento: </label>');
          $("form#conform").append('<input class="conf" type="text" name="'+cont+'asiento" id="asiento" value="'+asiento+'"> </br>');
          but.push(asiento);
          but_res ++;   // sumo una but reservada
          cont++;       // sumo unopara cambiar el name del input


          // si llego al maximo de selecciones butacas
          if (but_res == 2) {//<=

            //alert("Ha seleccionado el maximo de butacas bajas...");

          }

      }



      // si hay menos de 6 pullman reservados

      if ((fila > 20) && (pull_res < 4)){
        click_pull++;
        //acumclick_alto ++;
        $("input#click_alto").val(click_pull);

        $("form#conform").append('<label for="1fila">Fila: </label>');
        $("form#conform").append('<input class="conf" type="text" name="'+cont+'fila" id="1fila" value="'+fila+'">');
        fil.push(fila);

        $("form#conform").append('<label for="1asiento">Asiento: </label>');
        $("form#conform").append('<input class="conf" type="text" name="'+cont+'asiento" id="1asiento" value="'+asiento+'"> </br>');
        but.push(asiento);

        pull_res++;
        cont++;

        if (pull_res >= 6) {

          //alert("Ha seleccionado el maximo de butacas altas...");
        }
      }

  });

  $("#dni").change(function(){

      $("#dnitabl tbody tr").remove();
      idgl = $("select#dni option:selected").html();
      console.log("El dni de alumno cuando hace click");
      console.log(idgl);
      $.ajax({
              type: 'POST',
              data: { idgl: idgl},
              url: '<?php echo base_url(); ?>/admin/Butaca/traerbutaca',
              success: function(data){
                      console.log("Estoy en reserva entrada");
                      console.log(data);
                     // console.log(data[0]['dni_alumno']);
                      var sum = 0;
                      for(var i=0; i < data.length ; i++){
                        //var i=0;
                        //if (data[i]['estado']== 'RE'){

                        var estado= '<small class="label pull-left bg-blue" style="background-color: #4169E1  ;">Reservada</small>';
                        var  table= "<tr id='"+data[i]['id_butaca']+"'>"+

                                     "<td style='text-align: center'>"+data[i]['fila']+"</td>"+
                                     "<td style='text-align: center'>"+data[i]['nro_butaca']+"</td>"+
                                     "<td style='text-align: center'>"+estado+"</td>"+

                                   "</tr>";
                            $('#dnitabl').append(table);

                         // }
                        // i++;

                        if(data[i]['fila'] <= 20){
                          sum += 150;
                        }
                        else{
                          sum += 100;
                        }

                      }//fin for

                      $("#total").val(sum);

                    },

              error: function(result){

                      console.log(result);
                    },
              dataType: 'json'
      });
  });

    //Listado de asientos libres
  $("#libre").click(function (e) {
    $("#modalasiento tbody tr").remove();
    $.ajax({
        type: 'POST',
        data: {},
        url: '<?php echo base_url(); ?>/admin/Butaca/asientos_libres', //index.php/
        success: function(data){
              console.log("Asientos libres");
              console.log(data);
             // console.log(data[0]['fila']);
              for (var i = 0; i < data.length; i++) {
                if (data[i]['estado']== 'D'){
                var estado= '<small class="label pull-left bg-green" style="background-color: #38CD55  ;">Disponibles</small>';
                }
                var tr = "<tr >"+

                    "<td style='text-align: center'>"+data[i]['fila']+"</td>"+
                    "<td style='text-align: center'>"+data[i]['nro_butaca']+"</td>"+
                   "<td style='text-align: center'>" +estado+"</td>";

                    "</tr>";
                $('#tabla_inscriptos tbody').append(tr);

              }
              console.log(tr);
              },

        error: function(result){

              console.log(result);
            },
            dataType: 'json'
        });

  });

  $("#ocupado").click(function (e) {
    $("#modalasiento tbody tr").remove();
    $.ajax({
        type: 'POST',
        data: {},
        url: '<?php echo base_url(); ?>/admin/Butaca/asientos_ocupados', //index.php/
        success: function(data){
              console.log("Asientos libres");
              console.log(data);
             // console.log(data[0]['fila']);
              for (var i = 0; i < data.length; i++) {
                if (data[i]['estado']== 'O'){
                var estado= '<small class="label pull-left bg-red" style="background-color: #FF0000  ;">Ocupado</small>';
                }
                var tr = "<tr >"+

                    "<td style='text-align: center'>"+data[i]['fila']+"</td>"+
                    "<td style='text-align: center'>"+data[i]['nro_butaca']+"</td>"+
                   "<td style='text-align: center'>" +estado+"</td>";

                    "</tr>";
                $('#tabla_inscriptos tbody').append(tr);

              }
              console.log(tr);
              },

        error: function(result){

              console.log(result);
            },
            dataType: 'json'
        });

  });

  $("#res").click(function (e) {
    $("#modalasientores tbody tr").remove();
    $.ajax({
        type: 'POST',
        data: {},
        url: '<?php echo base_url(); ?>/admin/Butaca/asientos_reservados', //index.php/
        success: function(data){
              console.log("Asientos libres");
              console.log(data);
             // console.log(data[0]['fila']);
              for (var i = 0; i < data.length; i++) {
                if (data[i]['estado']== 'RE'){
                var estado= '<small class="label pull-left bg-red" style="background-color: #4169E1  ;">Reservado</small>';
                }
                var tr = "<tr >"+
                    "<td style='text-align: center'>"+data[i]['dni_alumno']+"</td>"+
                    "<td style='text-align: center'>"+data[i]['fila']+"</td>"+
                    "<td style='text-align: center'>"+data[i]['nro_butaca']+"</td>"+
                   "<td style='text-align: center'>" +estado+"</td>";

                    "</tr>";
                $('#tabla_inscriptos tbody').append(tr);

              }
              console.log(tr);
              },

        error: function(result){

              console.log(result);
            },
            dataType: 'json'
        });

  });

  $("#enretirada").click(function (e) {
    $("#modalasientores tbody tr").remove();
    $.ajax({
        type: 'POST',
        data: {},
        url: '<?php echo base_url(); ?>/admin/Butaca/asientos_retiradas', //index.php/
        success: function(data){
              console.log("Asientos libres");
              console.log(data);
             // console.log(data[0]['fila']);
              for (var i = 0; i < data.length; i++) {
                if (data[i]['estado']== 'RT'){
                var estado= '<small class="label pull-left bg-red" style="background-color: #FF8C00  ;">Retirado</small>';
                }
                var tr = "<tr >"+
                    "<td style='text-align: center'>"+data[i]['dni_alumno']+"</td>"+
                    "<td style='text-align: center'>"+data[i]['fila']+"</td>"+
                    "<td style='text-align: center'>"+data[i]['nro_butaca']+"</td>"+
                   "<td style='text-align: center'>" +estado+"</td>";

                    "</tr>";
                $('#tabla_inscriptos tbody').append(tr);

              }
              console.log(tr);
              },

        error: function(result){

              console.log(result);
            },
            dataType: 'json'
        });

  });

});


  // guarda reserva y recarga la pagina
  function guardar(){

        var data = $("#conform").serializeArray();
        $.ajax({

            type: 'POST',
            data: data,
           //url: 'index.php/Asiento/prueba',
            url: '<?php echo base_url(); ?>admin/Butaca/setAsiento',
            success: function(result){

                    $('#confirmar').modal('hide');

                   // setTimeout("cargarView('Asiento', 'index', '"+$('#permission').val()+"');",0)

                    $('#ubicacion2').empty();

                    $("#ubicacion2").load("<? echo base_url(); ?>admin/Butaca/ubicacion_view/");

                    imprimir_ticket();

                    //ver_comprobante();

            },

            error: function(result){

                        alert("Ha habido un error de guardado...");
                    },

            dataType: 'json'

        });

  }

  function imprimir_ticket(){

    $('#imprimi').modal('show');

  }

  function cerrar(){
      $('#imprimi').modal('hide');
  }

   function ver_comprobante(){


      console.log("Estoy imprimiendo un retiro de reserva");
      console.log("fila ");
      console.log(but);
      console.log(fil);
      //console.log(but_res); style="width:560px" "height:400px" "margin:10px" border="1px solid black"
      console.log("dni");
      console.log(dni);

      $.ajax({
          type: 'POST',
          data: { dni:dni },
          url: '<? echo base_url(); ?>'+'admin/Butaca/getimprimir',
          success: function(data){
                console.log("Entre a la impresion");
                console.log(data);
                //console.log(data['datos'][0]['fila']);
                var trequipos = '';
                for(var i=0; i <  data['datos'].length ; i++){
                  trequipos  = trequipos+"<tr> <td width='10%'>"+data['datos'][i]['fila']+"</td> <td width='10%'>"+data['datos'][i]['nro_butaca']+"</td> </tr>" ;
                }

      var texto1 = '<div class="modal fade" id="vistaimprimi" tabindex="-1" role="dialog style="overflow-y: scroll;" aria-labelledby="myModalLabel">'+

        '<div class="modal-dialog" role="document">'+

          '<div class="modal-content">'+

            '<div class="modal-header">'+

              '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+

              '<center>'+

              '<h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> COMPROBANTE DE RESERVACIÓN </h4> '+

              '</center>'+

            '</div>'+

            '<div class="modal-body" id="modalBodydestAgre">';



        var texto2 ='</div>'+

            '<div class="modal-footer">'+

              '<button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar" onclick="">Cerrar</button>'+

              '<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="imprimir()" id="btnSavedest">Imprimir</button>'+

            '</div>'+

          '</div>'+

        '</div>'+

      '</div>';

                var  texto = '<div class="" id="vistaimprimir" style="color:black;text-align:center;">'+

                               '<div class="" id="">'+

                                       '<div class="" >'+

                                         '<div class="">'+

                                           '<div class="">'+

                                           '<h3 class="text-center" align="center"></h3>'+

                                           '</div>'+

                                          '<hr/>'+

                                            '<div class="">'+

                                              '<div class="">'+

                                                   '<div class="">'+

                                                              '<div align="center" class="" style="padding-bottom:20px"> <label><center><a><img src="<?=base_url('assets/img/logo_sanpablo.png')?>" alt="Colegio San Pablo" title="Colegio San Pablo" width="200" heigth="170"/></a></center></div>'+

                                                      '</div>'+

                                                    '<div class="">'+

                                                    '<div class="">'+

                                                      '<center>'+

                                                       '<br><h4>FUNCIÓN DE FIN DE AÑO</h4>'+

                                                        '<br><h4>NIVEL INICIAL</h4>'+
                                                        '<br><h4>28 de Noviembre 20:00 Hs</h4>'+

                                                      '</center>'+

                                                      '<center>'+

                                                      '<br><h4>DNI DEL ALUMNO:'+ dni+ '<h4>'+

                                                      '</center><br>'+

                                                        '<table width="" style="text-align:justify;margin:auto" border="1px solid black">'+         '<thead>'+

                                                            '<tr width="40%">'+

                                                              '<th width="20%" style="text-align:center">Fila </th>'+

                                                              '<th width="40%" style="text-align:center">Nro de butaca</th>'+

                                                            '</tr>'+

                                                          '</thead>'+

                                                          '<tbody style="text-align:center">'+trequipos+

                                                         '</table>'+

                                                         '</tbody>'+

                                                     '</div>'+

                                                    '</div>'+

                                                    '<br>'+

                                                    '<br>'+

                                                   '<div class="">'+

                                                      '<div class="col-sm-12 col-md-12">'+

                                                       'Tiene un plazo de dos dias apartir de la fecha para retirar la Entrada'+

                                                     '</div>'+

                                                   '</div>'+

                                                   '<div class="row" border="1" >'+

                                                    '<div class="col-sm-12 col-md-12">'+



                                                      '<p class="bluetxt">La función se realizará en el teatro Sarmiento (Av. Alem 34 Norte - Capital)</p>'+

                                                      '<center>'+

                                                      '<p>SER PUNTUAL</p>'+

                                                      '</center>'+

                                                      '</div>'+

                                                    '</div>'+

                                                    '<br>'+

                                                    '<br>'+

                                                '</div>'+

                                             '</div>'+

                                          '</div>'+

                                         '</div>'+

                                '</div>'+

                            '</div>'+

                             '<style>'+

                                      '#viendo { width: 52%;                            margin: 50px auto;border: solid 1px #000;                                   height:800px}'+



                            '</style>'

                            '<style>'+

                                      '.table, .table>tr, .table>td  {} '+



                            '</style>';

                                   //border:  1px solid black;





                                           /*var mywindow = window.open('', 'Imprimir');

                                            //mywindow.document.write('<html><head><title></title>');

                                             //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');

                                             //mywindow.document.write('<link rel="stylesheet" href="main.css">

                                             // mywindow.document.write('</head><body onload="window.print();">');

                                            if(!mywindow){
                                              alert("Por favor, debe habilitar las ventanas emergentes para imprimir");
                                            }
                                            else{
                                               mywindow.document.write(texto);

                                              // mywindow.document.write('</body></html>');



                                               mywindow.document.close(); // necessary for IE >= 10

                                               //mywindow.focus(); // necessary for IE >= 10

                                               mywindow.print();

                                            }

                                            mywindow.close();*/

                                            $(texto1+texto+texto2).modal('show');

                                            return true;





                                           },



                   error: function(result){



                             console.log(result);

                             console.log("error en la vistaimprimir");

                                          },

                         dataType: 'json'

         });





    }

    function imprimir(){


      console.log("Estoy imprimiendo un retiro de reserva");
      console.log("fila ");
      console.log(but);
      console.log(fil);
      //console.log(but_res); style="width:560px" "height:400px" "margin:10px" border="1px solid black"
      console.log("dni");
      console.log(dni);

      $.ajax({

          type: 'POST',

          data: { dni:dni },

          url: '<? echo base_url(); ?>'+'admin/Butaca/getimprimir',

          success: function(data){



                console.log("Entre a la impresion");

                console.log(data);



                //console.log(data['datos'][0]['fila']);

                var trequipos = '';

                for(var i=0; i <  data['datos'].length ; i++){



                  trequipos  = trequipos+"<tr> <td width='10%'>"+data['datos'][i]['fila']+"</td> <td width='10%'>"+data['datos'][i]['nro_butaca']+"</td> </tr>" ;



                }

                var  texto = '<div class="" id="vistaimprimir">'+

                               '<div class="container" id="viendo">'+

                                 '<div class="thumbnail">'+

                                 '<div class="caption">'+

                                       '<div class="row" >'+

                                         '<div class="panel panel-default">'+

                                           '<div class="form-group">'+

                                           '<h3 class="text-center" align="center"></h3>'+

                                           '</div>'+

                                          '<hr/>'+

                                            '<div class="panel-body">'+

                                              '<div class="container">'+

                                               '<div class="thumbnail">'+

                                                   '<div class="col-sm-12 col-md-12">'+

                                                       '<table width="100%" style="text-align:justify" >'+

                                                         '<tr>'+

                                                         '<tr>'+

                                                               '<br>'+

                                                               '<td >'+

                                                                  '<center>'+

                                                                 '<div ><h2> COMPROBANTE</h2>'+

                                                                '</div>'+

                                                                '</center>'+



                                                                '</td>'+



                                                            '</tr>'+

                                                           '<tr>'+



                                                              '<td  colspan="1"  align="left" >'+

                                                              '<div class="text-left"> <label><center><a><img src="<?=base_url('assets/img/logo_sanpablo.png')?>" alt="Colegio San Pablo" title="Colegio San Pablo" width="200" heigth="170"/></a></center></div></td>'+

                                                               '</td>'+



                                                               '</tr>'+



                                                           '</tr>'+

                                                        '</table>'+

                                                      '</div>'+

                                                     '</div>'+

                                                    '<div class="row">'+

                                                    '<div class="col-sm-12 col-md-12">'+

                                                      '<center>'+

                                                       '<h3>FUNCIÓN DE FIN DE AÑO</h3>'+

                                                        '<h3>NIVEL INICIAL</h3>'+
                                                        '<h3>28 de Noviembre 20:00 Hs</h3>'+


                                                      '</center>'+

                                                      '<center>'+

                                                      '<h4>DNI DEL ALUMNO:'+ dni+'<h4>'+

                                                      '</center>'+

                                                        '<table width="100%" style="text-align:justify" border="1px solid black">'+         '<thead>'+

                                                            '<tr width="40%">'+

                                                              '<th width="20%" style="text-align:center">Fila </th>'+

                                                              '<th width="40%" style="text-align:center">Nro de butaca</th>'+



                                                            '</tr>'+

                                                          '</thead>'+



                                                          '<tbody style="text-align:center">'+trequipos+

                                                         '</table>'+

                                                         '</tbody>'+

                                                     '</div>'+

                                                    '</div>'+

                                                    '<br>'+

                                                    '<br>'+



                                                   '<div class="row">'+

                                                      '<div class="col-sm-12 col-md-12">'+

                                                       '<h3> Tiene un plazo de dos dias apartir de la fecha para retirar la Entrada </h3>'+

                                                     '</div>'+

                                                   '</div>'+

                                                   '<div class="col-sm-6 col-md-6" border="1" >'+

                                                    '<div class="col-sm-12 col-md-12">'+

                                                      '<p class="bluetxt">La función se realizará en el teatro Sarmiento (Av. Alem 34 Norte - Capital)</p>'+

                                                      '<center>'+

                                                      '<p>SER PUNTUAL</p>'+

                                                      '</center>'+

                                                      '</div>'+

                                                    '</div>'+

                                                    '<br>'+

                                                    '<br>'+









                                                '</div>'+

                                             '</div>'+

                                          '</div>'+





                                         '</div>'+

                                      '</div>'+

                                  '</div>'+

                                '</div>'+

                            '</div>'+

                             '<style>'+

                                      '#viendo { width: 52%;                            margin: 50px auto;border: solid 1px #000;                                   height:800px}'+



                            '</style>'

                            '<style>'+

                                      '.table, .table>tr, .table>td  {} '+
                            '</style>';

                                   //border:  1px solid black;





                                           var mywindow = window.open('', 'Imprimir');

                                            //mywindow.document.write('<html><head><title></title>');

                                             //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');

                                             //mywindow.document.write('<link rel="stylesheet" href="main.css">

                                             // mywindow.document.write('</head><body onload="window.print();">');

                                            if(!mywindow){
                                              alert("Para poder imprimir el comprobante, usted debe habilitar la opción ventanas emergentes de su navegador");
                                            }
                                            else{
                                               mywindow.document.write(texto);

                                              // mywindow.document.write('</body></html>');



                                               mywindow.document.close(); // necessary for IE >= 10

                                               //mywindow.focus(); // necessary for IE >= 10

                                               mywindow.print();

                                            }

                                            mywindow.close();

                                            return true;





                                           },



                   error: function(result){



                             console.log(result);

                             console.log("error en la vistaimprimir");

                                          },

                         dataType: 'json'

         });
    }

  function listado(){

    $('#ubicacion').empty();
    $("#ubicacion").load("<?php echo base_url(); ?>/admin/Butaca/cargardni");

  }

    
  function listado_sin_reserva(){
    location.href = "<?php echo base_url(); ?>admin/Butaca/cargardni2";
  }  


  function listado_ubicaciones(){
    location.href = "<? echo base_url(); ?>admin/Inscriptos";
  }

  traer_dni();
  function traer_dni(){
    $('#dni').val('');
    $.ajax({
        type: 'POST',
        data: { },
        url: '<?php echo base_url(); ?>/admin/Butaca/TraerDNI', //index.php/
        success: function(data){
                    console.log(data);
                   
                   var opcion  = "<option value='-1'>Seleccione...</option>" ;
                  $('#dni').append(opcion);
                for(var i=0; i < data.length ; i++)
                {
                  
                      var nombre = data[i]['dni_alumno'];
                      var opcion  = "<option value='"+data[i]['id_reserva']+"'>" +nombre+ "</option>" ;

                    $('#dni').append(opcion);
                }    
                
              },
        error: function(result){

              console.log(result);
            },
            dataType: 'json'
    });
  }

  function entregar_res(){

   console.log("Estoy cambiando a retirada el estado de butacas");
   console.log("El dni del alumno es :");
   console.log(idgl);

    $.ajax({
      type: 'POST',
      data: {idgl:idgl},
      url: '<?php echo base_url(); ?>admin/Butaca/RetirarEntrada', //index.php/
      success: function(data){

            console.log("Exito en entregar reserva");
            console.log(data);
             // $('#confirmar').modal('show');

          $("#entrega tbody tr").remove();
          $("#dni").html('');
          traer_dni();
          $('#ubicacion').empty();
          $("#ubicacion").load("<?php echo base_url(); ?>admin/Butaca/index/");


          },

      error: function(result){
            console.log("Entre por el error");
            console.log(result);
          }
         // dataType: 'json'
    });
  }

  function anular(){

   console.log("Estoy cambiando a retirada el estado de butacas");
   console.log("El dni del alumno es :");
   console.log(idgl);

    $.ajax({
      type: 'POST',
      data: {idgl:idgl},
      url: '<?php echo base_url(); ?>admin/Butaca/AnularReserva', //index.php/
      success: function(data){

            console.log("Exito en entregar reserva");
            console.log(data);
             // $('#confirmar').modal('show');
            $("#entrega tbody tr").remove();
            $("#dni").html('');
            traer_dni();
            $('#ubicacion').empty();
            $("#ubicacion").load("<?php echo base_url(); ?>admin/Butaca/index/");


          },

      error: function(result){
            console.log("Entre por el error");
            console.log(result);
          }
         // dataType: 'json'
    });
  }


</script>

  <script>

    var dni = 0; //esta variable reemplazarla arriba por la que esta
    //Pone en 0 los inputs al entrar en sistema
    $(function(){
      $("#click_bajo").val("0");
      $("#click_alto").val("0");
    });

    //Trae DNI y autocompleta el campo
    $(function() {
        $("#dni").select2({
          theme: "bootstrap",
          placeholder: "Ingrese documento",
          allowClear: false
        });

        $("#dni_reserva").autocomplete({
            source:function(request, response) {
                      $.ajax( {
                        url: '<?php echo base_url(); ?>admin/Butaca/getDocAlum',
                        dataType: "json",
                        success: function(data) {
                          response(data);
                        }
                      });
            },
            //delay: 100,
            minLength: 1,
            focus: function(event, ui) {
                // prevent autocomplete from updating the textbox
                event.preventDefault();
                // manually update the textbox
                $(this).val(ui.item.label);
            },
            select: function(event, ui) {
                // prevent autocomplete from updating the textbox
                event.preventDefault();
                // manually update the textbox and hidden field
                $(this).val(ui.item.label);
                // $("#id_articulo").val(ui.item.value);
                // $("#decripInsumo").val(ui.item.descripcion);
            },
            open: function( event, ui ) {
                $("ul.ui-autocomplete").css('z-index',9999);
            }

        });
    });
    //Trae cantidad de reservas e inicializa variables para control de cantidad
    function getReservas(){

        //guardo el dni del alumno ingresadoen modal Reservar
        dni = $("#dni_reserva").val();

        $.ajax({
                'data':{dato: dni},
                'async': false,
                'type': "POST",
                'global': false,
                'dataType': 'json',
                'url': '<?php echo base_url(); ?>admin/Butaca/getReserva',
                'success': function (data) {
                    console.log(data);
                    console.log('**************');
                    console.log('entre por el success');
                    console.log(data[0]['butaca']);
                    console.log(data[0]['pullman']);

                    b_r_o = data[0]['butaca'];
                    p_r_o = data[0]['pullman'];
                    but_res = data[0]['butaca'];  // para saber cuantas tiene inamobible
                    pull_res = data[0]['pullman'];// para saber cuantas tiene inamobible

                    click_but = data[0]['butaca'];
                    click_pull = data[0]['pullman'];

                    $("input#click_bajo").val(data[0]['butaca']);// cargo input  con valor entrada
                    $("input#click_alto").val(data[0]['pullman']);// cargo input con valor entrada
                 }

                // },
                // 'error': function(){

                // }
            });
    }
    //Limpia variables al cerrar el modal Reservar
    function cancEntrega(){
      $("#dni_reserva").val("");
      //muestro nuevamente la butaca
          $(".habilitada").fadeIn('slow');

          // limpio el modal
          $("form#conform").empty();

          but_res = b_r_o;
          pull_res = p_r_o;
          cont = 0;
          acumclick_alto = p_r_o;
          acumclick_bajo = b_r_o;
          //reseteo contadores de click
          click_but = b_r_o;
          click_pull = p_r_o;

          //muestro en input el valor de reservados
          $("input#click_bajo").val(b_r_o);
          $("input#click_alto").val(p_r_o);

          //limpio input dni y vacio la variable dni
          $("input#dni").val("");
          dni = 0;

          // vacio los array de but y filas
          but=[];
          fil=[];
    }

    //btn ver reserva
    function verReserva(){
        $("#confirmar").modal('show');
        // agrego dni para enviar
        $("#dni_alum").val(dni);
    }
  </script>

  <style>
  .select2-container {
    border-style: solid;
    border-width: thin;
    background-color: #fff;
    border-color: #ccc;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;    
  }

  .#dni{
    z-index: 9001;
  }

  .select2-dropdown {
    z-index: 9001;
  }

    .enlinea{
      display: inline-block;
    }

    .asiento{
      max-width: 200px;
    }

    .ui-autocomplete {
    max-height: 300px;
    overflow-y: auto;
    overflow-x: hidden;
    padding-right: 20px;

    background-color: white;
    overflow-x: hidden;
    max-width: 227px;
    }

    .conf{
      border: none;
      width: 8%;}

    .ref{margin-left: 15px;}

    #confirmar{
      background-color: #fff !important;
      color: #000;}

    .sel{color: #000;}

    #click_bajo{
      border: none;
      width: 10px;
      padding-left: 2px;
      color: #000;}

    #click2{
      border: none;
      color: #000;}

    #click_alto{
      border: none;
      width: 10px;
      padding-left: 2px;
      color: #000;}

    #alto2{
    border: none;
    color: #000;}

    .ui-autocomplete {
    max-height: 300px;
    overflow-y: auto;
    overflow-x: hidden;
    padding-right: 20px;}

  </style>
  <!--  Modal Verificar reservas-->
    <div class="modal fade" id="reserva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Reservar</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="control-label">Ingrese DNI:</label>
                <input type="text" class="form-control" id="dni_reserva" style="width: 50%;">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancEntrega()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="getReservas()">Aceptar</button>
          </div>
        </div>
      </div>
    </div>


  <!--  Modal Guardar -->
    <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document" style="width: 40%">
        <div class="modal-content" style="width: 100%">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span><center> Confirmar</center></h4>
          </div>
          <div class="modal-body" id="modalBodydestAgre">

              <form id="conform" class="center">

                  <!-- <input class="conf" type="hidden" name="dni_alumno" id="" value="<?php //echo $_SESSION['dni_alumno'] ?>"> -->
                  <!-- <label>Ingrese DNI del alumno:</label>
                  <input class="conf" type="text" name="dni" id="" value= ""> -->
                  </br></br>
                  <p>Las butacas seleccionadas son: </p>
                  <input class="conf" type="hidden" name="dni_alumno" id="dni_alum" value= "">

              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar" onclick="">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="guardar()"
            id="btnSavedest">Guardar</button>
          </div>
        </div>
      </div>
    </div>

<!--  Modal pregunta para imprimir -->

  <div class="modal fade" id="imprimi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center>
          <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> COMPROBANTE DE RESERVACIÓN </h4>
          </center>
        </div>
        <div class="modal-body" id="modalBodydestAgre">
            <center><p>¿Desea ver el comprobante de reservación?</p>
            </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="" onclick="cerrar()">No</button>
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal" id="" onclick="">No</button> -->
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="ver_comprobante()" id="btnSavedest">SI</button>
        </div>
      </div>
    </div>
  </div>

<!--  Modal Entregar-->
  <div class="modal fade" id="entrega" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
                <div class="col-xs-4">Dni de alumno
                  <select type="text" id="dni" name="dni" class="form-control" value="">
                  </select>
                </div>
                <br>
                <table id="dnitabl" class="table table-bordered table-hover">
                  <thead>
                    <tr>

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
            <div class="col-xs-4" align="left">Total a pagar:
              <input  type="text" id="total" name="total" class="form-control" value="">
            </div>            
            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="entregar_res()">ENTREGAR</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="anular()" disabled="disabled">ANULAR</button>
          </center>
        </div>
      </div>
    </div>
  </div>
<!-- /  Modal Entregar-->
<!-- Modal Asientos libres -->
  <div class="modal fade" id="modalasiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span><label> Butacas </label></h4>
          </center>
          <br>

        </div> <!-- /.modal-header   class="table table-bordered table-hover" -->
        <div class="modal-body">
          <div class="col-sm-12 col-md-12">
            <table id="tabla_inscriptos"  class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="text-align: center">Fila </th>
                  <th style="text-align: center">Nro de butaca </th>
                  <th style="text-align: center">Estado </th>

                </tr>
              </thead>
              <tbody>   </tbody>
            </table>
          </div>
        </div> <!-- /.modal-body -->
      </div> <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog modal-lg -->
  </div>  <!-- /.modal fade -->

  <!-- Modal Asientos reservados -->
  <div class="modal fade" id="modalasientores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span><label> Butacas </label></h4>
          </center>
          <br>

        </div> <!-- /.modal-header   class="table table-bordered table-hover" -->
        <div class="modal-body">
          <div class="col-sm-12 col-md-12">
            <table id="tabla_inscriptos"  class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="text-align: center">DNI </th>
                  <th style="text-align: center">Fila </th>
                  <th style="text-align: center">Nro de butaca </th>
                  <th style="text-align: center">Estado </th>

                </tr>
              </thead>
              <tbody>   </tbody>
            </table>
          </div>
        </div> <!-- /.modal-body -->
      </div> <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog modal-lg -->
  </div>  <!-- /.modal fade -->


