<script type="text/javascript">
    $(document).ready(function() {
	    
		 $('.check').change(function() {
		    alert("retiro");  
		// $('input:checkbox').change(function () {
             //console.log("email");
			var dni = $(this).val();
		   
			var check = $(this).is(':checked');
			//alert (check);
			if($(this).is(':checked')){
				
				   var request = "<?echo site_url('admin/inscriptos/retiro_entrada');?>";
					$.ajax({
					  // var urlRequest = "<?echo base_url('inicio/inscripcion');?>";
						type: "POST",
						url: request,
					   // dataType: 'json', //tipo de datos retornados
						data: {dni: dni, value : 1},
						
						success: function(data){
							console.log(data);
				            //convertir el texto a un nuevo objeto
				            var obj = $.parseJSON(data);
				            console.log(obj.message);					  
							$("#retiro_entrada").text(obj.message);
						}
					});
			}else{
				var request = "<?echo site_url('admin/inscriptos/retiro_entrada');?>";
					$.ajax({
					  // var urlRequest = "<?echo base_url('inicio/inscripcion');?>";
						type: "POST",
						url: request,
					   // dataType: 'json', //tipo de datos retornados
						data: {dni: dni, value : 0},
						
						success: function(response){
							console.log(response);
			           		//convertir el texto a un nuevo objeto
			            	var obj = $.parseJSON(response);						  
						  	$("#retiro_entrada").text(obj.message);	
						 	  
						},  // fin success         
                         error: function(response){
                           console.log(response); 
                                          
                        }
					});
			}
				
        });
		//--checked Docente
		
	     $('.check_docente').change(function() {
			alert("docente");
			var dni = $(this).val();
		   
			//var check = $(this).is(':checked');
			//alert (check);
			if($(this).is(':checked')){
				
				   var request = "<?echo site_url('admin/inscriptos/is_docente');?>";
					$.ajax({
						type: "POST",
						url: request,
					   // dataType: 'json', //tipo de datos retornados
						data: {dni: dni, value : 1},
						
						success: function(data){
							console.log(data);
				            //convertir el texto a un nuevo objeto
				            /*var obj = $.parseJSON(data);
				            console.log(obj.message);					  
							$("#retiro_entrada").text(obj.message);*/
						}
					});
			}else{
				var request = "<?echo site_url('admin/inscriptos/is_docente');?>";
					$.ajax({
						type: "POST",
						url: request,
					   
						data: {dni: dni, value : 0},
						
						success: function(response){
							console.log(response);
			           		//convertir el texto a un nuevo objeto
			            	/*var obj = $.parseJSON(response);						  
						  	$("#retiro_entrada").text(obj.message);	*/
						 	  
						},  // fin success         
                         error: function(response){
                           console.log(response); 
                                          
                        }
					});
			}
		});
	}); 
 </script>	
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

		<div class="container">
					
			    <div class="row">

						<div class="well" id="cajaform">
							<div class="phead">
								<h2><p class="pull-left">Listado de inscriptos</p></h2>
								<p>
									<a class="btn btn-success btn-large pull-right" 
									   href="<?=base_url("admin/inscriptos/exportar")?>">Exportar a Excel</a>
								</p>
							</div>
							<br><br><br>
							<div class="pbody">
							<a href="#" 
								style="font-size: 12pt; text-decoration:none">
								Se retiraron 
								<span id ="retiro_entrada" class="badge">
									<?=$entradas_retiradas?>
								</span> entradas</a>							
							<!--
							<div class=" label label-info pull-center" style="font-size: 14pt;padding: 20px">
									<span class="pull-left">
										Retiraron su entrada&nbsp;
									</span> 
									<strong><span id="entradas_retiradas"  class="pull-left">
										<?=$entradas_retiradas?>
									</span></strong>
									<span class="pull-left">&nbsp;personas</span>
							</div>-->
							<!---/////////////////////////////////////////////////////////////////////////////// -->
							<!---/////////////////////////////////////////////////////////////////////////////// -->
							<!---/////////////////////////////////////////////////////////////////////////////// -->
							<br><br>
							<?if(isset($inscriptos) && $inscriptos->num_rows() > 0){?>
							<table id="tabla_inscriptos" class="display" cellspacing="0" border="0">
								<thead>
									<tr>
										<th class="celda">Nombre</th>
										<th class="celda">Apellido</th>
										<th class="celda">E-mail</th>
										<th class="celda">Dni</th>
										<th class="celda">Tel&eacute;fono</th>
										<th class="celda">Sexo</th>
										<th class="celda">Retiró</th>
										<th class="celda">FechaRetiro</th>
										<th class="celda">Docente</th>
									</tr>
								</thead>
								<tbody>
								
								<? 
								foreach ($inscriptos->result() as $key => $value) {?>
									<tr>
										<td class="celda"><?=$value->nombre?></td>
										<td class="celda"><?=$value->apellido?></td>	
										<td class="celda"><?=$value->correo?></td>
										<td class="celda"><?=$value->dni?></td>
										<td class="celda"><?=$value->telefono?></td>
										<td class="celda"><?=$value->sexo?></td>
									<!--	<td class="celda"><?=($value->sexo == 'm')?"masculino":"femenino"?></td> -->
									    <td class="celda"><!--<input type="checkbox" name="check" id="check" value="value" />-->
									    <?php
									    $array = array('name' => 'check'.$value->dni,
								                		'id'=>'check', 
								                		'checked' => ($value->retiro == 1)?TRUE:FALSE,
								                		'class' => 'check',
								                		'value' => $value->dni);
								        echo form_checkbox($array);
							            ?></td>
										<td class="celda" ><?php
										
										
            //										echo time($value->fecha_retiro);
			                            $anio = substr($value->fecha_retiro,0,4);
										
										if($value->retiro == 1){
										  if($anio == '0000'){
											echo "&nbsp";
										  }else{
									        $fecha_retiro =substr($value->fecha_retiro,8,2).'-'.substr($value->fecha_retiro,5,2).'-'.substr($value->fecha_retiro,0,4);		
										    echo $fecha_retiro;
										  }									 	
										}else{
											echo "&nbsp";
										}
										
										?></td>
										<td class="celda">
									    <?php
									    $array = array('name' => 'check_docente'.$value->dni,
								                		'id'=>'check_docente', 
								                		'checked' => ($value->docente == 1)?TRUE:FALSE,
								                		'class' => 'check_docente',
								                		'value' => $value->dni);
								        echo form_checkbox($array);
							            ?></td>
									</tr>										
								<?}?>
								</tbody>
							</table>
							<?}							
							else{?>
								<div class="alert alert-dismissible alert-warning">
								  <button type="button" class="close" data-dismiss="alert">&times;</button>
								  	<?echo "<p> No hay personas inscriptas</p>";?>
								</div>							
							<?}?>

							<!---/////////////////////////////////////////////////////////////////////////////// -->
							<!---/////////////////////////////////////////////////////////////////////////////// -->
							<!---/////////////////////////////////////////////////////////////////////////////// -->
							</div><!-- fin pbody -->
						</div><!-- fin cajaform (antes ahora es well) -->
				</div><!-- fin row -->
		</div>	
		