
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
        <div class="container" >
          
          <div class="row" style="background-color: #fff;">

            <div class="well" id="cajaform">
              <div class="phead">
                <h2><p class="pull-left">Listado de Butacas</p></h2>
                </div>
              <br><br><br>
              <div class="pbody">
      
          <table id="tabla_inscriptos" class="display" cellspacing="0" border="0">
            <thead>
              <tr>                
                <th width="20%" style="text-align: center">Acciones</th>
                <th style="text-align: center">Fila</th>
                <th style="text-align: center">Nro de butaca</th>
                <th style="text-align: center">Tutor</th>
                <th style="text-align: center">Dni del alumno</th>
                <th style="text-align: center">Estado</th>
                <th style="text-align: center">Retiro</th>
              </tr>
            </thead>
            <tbody>
              <?php

                  
                  foreach($list as $a){ 
                    if ($a['estado'] != "AN") {
                
                    $id=$a['id_butaca'];
                
                    echo '<tr id="'.$id.'" >';
                    echo '<td >';
                    //if (strpos($permission,'Edit') !== false) {  class="glyphicon glyphicon-ice-lolly" aria-hidden="true"

                      echo '<i class="ion-printer" style="color: #f39c12; cursor: pointer; margin-left: 15px;"></i>';

                      echo '<i class="ion-android-cancel" style="color: #f39c12; cursor: pointer; margin-left: 15px;" title="Imprimir"  ></i> ';
                      echo '<i class="ion-android-search" style="color: #f39c12; cursor: pointer; margin-left: 15px;" title="Editar" data-toggle="modal" data-target="#modaleditar"></i>' ;
                    //}

                   
                    echo '</td>';
                   
                    echo '<td class="maquin"style="text-align: center">'.$a['fila'].'</td>';
                    echo '<td style="text-align: center">'.$a['nro_butaca'].'</td>';
                     echo '<td style="text-align: center">'.$a['apellido'].'  '.$a['nombre'].'</td>';
                      echo '<td style="text-align: center">'.$a['dni_alumno'].'</td>';
                  
                    

                    echo '<td style="text-align: center">'.($a['estado'] == 'D' ? '<small class="label pull-left bg-green" >Disponible</small>' :($a['estado'] == 'RE' ? '<small class="label pull-left bg-blue">Reservado</small>' : '<small class="label pull-left bg-red">Ocupado</small>')).'</td>';
                    echo '<td style="text-align: center">'.$a['dni_alumno']. '</td>';
                    echo '</tr>';

                  }
                    }

              ?>
            </tbody>
            
          </table>
          </div>
     
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
 


<script>
  var isOpenWindow = false;
  var comglob="";
  var ide="";
  var idglob= "";


  





    
  
   


</script>

