
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

