  <!-- <div class="row"> -->
    <div class="" id="ubicacion" style="background-color: #fff;float: left;">

      <div class="box">

        <div class="box-header">

          <center>

            <h3 class="box-title" style="color: #000; "> Reserva de Ubicaciones</h3>

          </center>

          <div class="row">

            <div class="col-xs-12 col-md-12">

              <div style="margin: 20px;" class="col-md-6">

               <H5 style="color: #000; "><label>Pasos para reservar Ubicaciones:</label></H5>

                <H5 style="color: #000; ">1- Hacer click sobre las butacas que desea reservar (considerando fila y asiento que desea).</H5>

                <H5 style="color: #000; ">2- De las filas 1 a la 20, cada alumno solo puede reservar y retirar dos entradas con su DNI. Mientras que en las ubicaciones pullman, de las filas 21 a 28 se podr&aacute;n reservar hasta 6. 
.</H5> 

          

                <H5 style="color: #000; ">3- Una vez finalizado, presionar el bot&oacute;n GUARDAR RESERVA donde ver&aacute; las reservas realizadas.</H5>

                

                <br>

                <label  style="color: #000; "> Valor de Entrada:</label>

                <H5 style="color: #000; ">Fila 1 a 10 (Ubicaciones Bajas): $150</H5>

                <H5 style="color: #000; ">Fila 11 a 20 (Ubicaciones Bajas): $150</H5>

                <H5 style="color: #000; ">Filas 21 a 28 (Secci&oacute;n Pullman - Altas): $100</H5>


              </div>

              <br>

              <div  class="col-md-4 pull-right" >

                

                <label style="color: #000; ">Referencias:</label> 

                  <br>

                    <?php



                      echo '<button type="button" class="btn btn-success" style="width:20px; height:15px;"></button><label  style="color: #000; ">&nbsp; Asientos libres    </label>'; 

                      echo '<br>';          

                      echo '<button type="button" class="btn btn-danger" style="width:20px; height:15px;"></button><label  style="color: #000; "> &nbsp;Asientos Ocupados</label>'; 

                      echo '<br>';  

                     // echo '<button type="button" class="btn btn-primary" style="width:20px; height:15px;"></button><label  style="color: #000; "> &nbsp;Asientos Reservados<br></label>'; 

                      echo '<br>';         

                      //echo '<button type="button" class="btn btn-warning" style="width:20px; height:15px;"></button><label  style="color: #000; "> Entradas Retiradas</label>';

                    ?>

              </div>



            </div>

          </div>

          <div class="row">

            <div class="col-xs-12 col-md-12">

              <div  class="col-md-4" style="margin: 20px;">

                 <label for="click_bajo" id="bajo" class="label label-info" style="color: #000;">Cantidad Reservada en Ubicaci&oacute;n Baja:</label>

                <input type="text" name="" id="click_bajo" style="border: none; width: 10px; padding-left: 2px;" style="color: #000">

                <input type="text" id="click2" name="" value=" de  2" style="border: none;">

                </br>

                <label for="click_alto" style="color: #000; ">Cantidad Reservada en Ubicaci&oacute;n  Pullman:</label>

                <input type="text" name="click_alto" id="click_alto" style="border: none; width: 10px; padding-left: 2px;" style="color: #000; ">

                <input type="text" id="alto2" name="" value=" de  6" style="border: none;" style="color: #000; ">

              </div>

              <br>

              <div class="col-md-4">

                <button type="button" class="btn btn-primary" onclick="verReserva()" width="80" height="20">GUARDAR RESERVA</button>

                <button type="button" class="btn btn-primary" onclick="imprimir()" >REIMPRIMIR COMPROBANTE</button>

              </div>

              <!--<div class="pull-right" >-->

            </div>

          </div>   

          <center>

            <!-- <h5 class="box-title" style="margin: 20px;"><label style="color: #000; ">Ubicaciones a seleccionar</label></h5> -->

          </center>  

        </div><!-- /.box-header -->

        <div class="box-body" style="background-color: #fff;">  



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

                   <th>E</th>

                   <th>S</th>

                   <th>C</th>

                   <th>E</th>

                   

                   <th></th> 

                   

                   <th>N</th>

                   <th>A</th>

                   <th>R</th>

                   <th>I</th>

                   <th>O</th>

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

                                  echo '  <img class="asiento habilitada" title="Disponible" src="'.base_url().'/assets/img/D.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                              case 'O':

                                  echo ' <img class="asiento" title="Ocupada" src="'.base_url().'/assets/img/O.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                              case 'RE':

                                 // echo ' <img class="asiento"  src="'.base_url().'/assets/img/RE.png">'.$list[$z]["nro_butaca"].'';
                                echo ' <img class="asiento" title="Ocupada" src="'.base_url().'/assets/img/O.png">'.$list[$z]["nro_butaca"].'';

                                  break;

                              case 'RT':

                                  //echo '<img class="asiento"  src="'.base_url().'/assets/img/RT.png">'.$list[$z]["nro_butaca"].'';
                                  echo ' <img class="asiento" title="Ocupada" src="'.base_url().'/assets/img/O.png">'.$list[$z]["nro_butaca"].'';

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

   ///////////////// aca estan los dos arrays//////////

  var but =[] ;

  var fil =[] ;

  /////////////////////////////////  

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



    var dni = <?php echo $_SESSION['dni_alumno'] ?>;

    //var dni = 123;

    // trae las reservas por dni de alumno

    $(function(){

      $.ajax({

              'data':{dato: dni},

              'async': false,

              'type': "POST",

              'global': false,

              'dataType': 'json',

              'url': "<?php echo base_url(); ?>Asiento/getReserva",

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

                  $("input#click_alto").val(data[0]['pullman'])// cargo input con valor entrada

               }   



              // },

              // 'error': function(){



              // }

          });

    })

  

// selecciona las butacas limitadas por reservas

    $(".habilitada").click(function(){      



        // oculta la butaca al hacer click

        $(this).fadeOut();

       

        // guarda asiento y fila en cada click  

        fila = parseInt($(this).parent('td').attr('class'));

        asiento = parseInt($(this).parent('td').attr('id'));



        // si hay dos butacas reservadas antes

        if ((fila <= 20) && (but_res >= 2)){

          alert("Usted reservo la cantidad maxima de asientos permitidos...");

          $(this).fadeIn('slow');          

          return;

        }

        // si hay seis pullman reservadas antes

        if ((fila > 20) && (pull_res == 6)){

          alert("Ya tiene el maximo de pullman reservados...");

          $(this).fadeIn('slow');          

          return;

        }



        // si hay menos de 2 asientos reservados

        if ((fila <= 20) && (but_res < 2)){

          

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

              //$("img:even").removeClass( "habilitada" );

            }

        }



        // si hay menos de 6 pullman reservados

        if ((fila > 20) && (pull_res < 6)){
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



   // cancela el modal limpiando variables

     $("#btnCancelar").click(function(){
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
        
        //limpio input dni
        $("input#dni").val("");

        // vacio los array de but y filas
        but=[];
        fil=[];
    });



    //btn ver reserva

    function verReserva(){

      $("#confirmar").modal('show');

    }



      // guarda reserva y recarga la pagina

    function guardar(){



        var data = $("#conform").serializeArray();

        

        $.ajax({

            type: 'POST',

            data: data,

            //url: 'index.php/Asiento/prueba',

            url: '<?php echo base_url(); ?>/Asiento/setAsiento',

            success: function(result){

                            

                    $('#confirmar').modal('hide');

                    //local volver

                    // setTimeout("cargarView('Asiento', 'index', '"+$('#permission').val()+"');",0)

                    $('#ubicacion').empty();

                    $("#ubicacion").load("<?php echo base_url(); ?>/Asiento/index/");

                    imprimir_ticket();

   



                  

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



  function imprimir(){

  // b_r_o = data[0]['butaca'];

  //                   p_r_o = data[0]['pullman'];

  //                   but_res = data[0]['butaca'];

  //                   pull_res = data[0]['pullman'];

  //                   click_but = data[0]['butaca'];

  //                   click_pull = data[0]['pullman'];



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

        url: '<? echo base_url(); ?>'+'Asiento/getimprimir', 

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

                                                            '<div class="text-left"> <label><center><a><img src="<?=base_url('assets/img/logo_sanpablo.png')?>" alt="Colegio San Pablo" title="Colegio San Pablo" width="270" heigth="210"/></a></center></div></td>'+

                                                             '</td>'+

                                                            

                                                             '</tr>'+



                                                         '</tr>'+

                                                      '</table>'+

                                                    '</div>'+

                                                   '</div>'+

                                                   '<br>'+

                                                  '<div class="row">'+

                                                  '<div class="col-sm-12 col-md-12">'+

                                                    '<center>'+

                                                     '<h3>FUNCIÓN DE FIN DE AÑO</h3>'+ 

                                                      '<h3>NIVEL INICIAL</h3>'+
                                                      '<h3>28 de Noviembre 20:00 Hs</h3>'+


                                                    '</center>'+

                                                      '<br>'+

                                                    '<center>'+

                                                    '<h4>DNI DEL ALUMNO:<h4>'+ dni+ 

                                                    '</center>'+ 

                                                      '<table width="100%" style="text-align:justify" border="1px solid black">'+         '<thead>'+

                                                          '<tr width="40%">'+

                                                            '<th width="20%" style="text-align:center">Fila </th>'+

                                                         

                                                          

                                                            '<th width="40%" style="text-align:center">Nro de butaca</th>'+

                                                           

                                                          '</tr>'+

                                                        '</thead>'+

                                                        

                                                        '<tbody style="text-align:center">'+trequipos+

                                                        '<tr colspan="2">'+

                                                          

                                                          '<td><br></td>'+

                                                        

                                                        

                                                          

                                                          '<td><br></td>'+

                                                        '</tr>'+

                                                       '</table>'+

                                                       '</tbody>'+

                                                   '</div>'+

                                                  '</div>'+

                                                  '<br>'+

                                                  '<br>'+

                                                  

                                                 '<div class="row">'+

                                                    '<div class="col-sm-12 col-md-12">'+

                                                     '<h3> Tiene un plazo de dos dia apartir de la fecha para retirar la Entrada </h3>'+

                                                   '</div>'+ 

                                                 '</div>'+

                                                 '<div class="col-sm-6 col-md-6" border="1" >'+

                                                  '<div class="col-sm-12 col-md-12">'+

                                                    

                                                    '<p class="bluetxt">La función se realizará el teatro Sarmiento (Av. Alem 34 Norte - Capital)</p>'+

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



                                           mywindow.document.write(texto);

                                          // mywindow.document.write('</body></html>');



                                           mywindow.document.close(); // necessary for IE >= 10

                                           //mywindow.focus(); // necessary for IE >= 10

                                           mywindow.print();



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



</script> 



<style>

    .conf{

        border: none;

        width: 8%;    

    }

   .ref{margin-left: 15px;}

    #confirmar{

        background-color: #fff !important;

        color: #000;    }

    .sel{color: #000;}  

    #click_bajo{ 

      border: none;

      width: 10px; 

      padding-left: 2px; 

      color: #000;}

    #click2{

      border: none;

      color: #000;

    }

    #click_alto{ 

      border: none;

      width: 10px; 

      padding-left: 2px; 

      color: #000;}

    #alto2{

    border: none;

    color: #000;

    }



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

            

               <input class="conf" type="hidden" name="dni_alumno" id="" value='<?php echo $_SESSION['dni_alumno'] ?>'> 

                <!--<input class="conf" type="hidden" name="dni_alumno" id="" value= "123">-->             
              
            </form>

        </div>

        <div class="modal-footer">
            <p>Para confirmar los asientos seleccionados, click en  <b>"GUARDAR" </b> <br />
                Para seleccionar otros asientos o salir hacer click "CANCELAR"</p>
           
          <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar" onclick="">Cancelar</button>

          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="guardar()" 

          id="btnSavedest">Guardar</button>

        </div>

      </div>

    </div>

  </div>

<!-- /  Modal Guardar -->



<!--  Modal pregunta -->

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

            <center><p>¿Desea imprimir comprobante de reservación?</p>

            </center>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar" onclick="">No</button>

          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="imprimir()" 

          id="btnSavedest">SI</button>

        </div>

      </div>

    </div>

  </div>

<!-- /  Modal pregunta-->

