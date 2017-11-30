 <div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          Revise que todos los campos esten completos
      </div>
  </div>
</div>
 <div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error1" style="display: none">
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          EL DNI NO CORRESPONDE A UN ALUMNO 
      </div>
  </div>
</div>
	<div id="formulario">
		<div class="container">
			<div id="preins">
					
				<!--	<div id="clockdiv" data-wow-delay="2s" class="wow fadeInDown">
					<div>Faltan:&nbsp;</div>
					<div>
					    <span class="days"></span>
					   <div class="smalltext">&nbsp;D&iacute;as |&nbsp;&nbsp;</div>
					</div>
					<div>
					    <span class="hours"></span>
					    <div class="smalltext">&nbsp;Hs |&nbsp;&nbsp;</div>
					</div>
					<div>
					   <span class="minutes"></span>
					   <div class="smalltext">&nbsp;Min</div>
					</div>
				</div>-->
					
			    <div class="row">
					<!--<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">-->
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">	
					
						<h5 id="titpreins">Adquirir Entrada</h5>
						<a id="btn-inicio" href="<?php echo base_url('inicio'); ?>">
					        <img src="<?=base_url('assets/img/izquierda.png')?>" alt="" width=""/>
								Inicio
						</a>
					<div class="cf" id="cajaform">
						<p>Por favor, Ingrese el documento del alumno para reservar su entrada.</p>
						<p>Realizada su reserva, deber&aacute; retirar su entrada por  <a href="<?php echo base_url('inicio/retirar_entrada/'); ?>">el domicilio del colegio.</a> </p>
						<br>
						<p>Cantidad de entradas posibles a reservar por alumno es:</p>
						<p> Hasta 3 en la PARTE BAJA y hasta 4 en la PARTE ALTA(Pullman), siempre y cuando no se hayan ocupado la totalidad de los asientos. </a> </p>
                        <br>
                         <br>
						<div class="form-group">
							<label for="dni" class="col-sm-4 control-label noright">DNI del alumno:</label>
							<div class="col-sm-8">
						    	<input type="text" class="form-control" id="dnialumno" name="dnialumno"  placeholder="Ingrese DNI del alumno">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">												
							<div class="" style="display: inline-block;float:right;">
							   <button type="button" class="btn btn-azul pull-right" id="asistir" onclick="guardar()">Aceptar</button>
							</div>
						</div>
						<!--<br><br>
						 <div class="row">
						  <div class="col-xs-12">
						    <div class="alert alert-danger" id="">
									Momentaneamente se encuentra deshabilitado para el ingreso de usuarios. Estar&aacute; disponible a partir de las 00:00 hs del d&iacute;a 23/11. Puede ir consultando la <a href="<?//=base_url('inicio/guia_usuario')?>" style="color:blue">GU&Iacute;A DE USO</a>.
						      </div>
						  </div>
						</div>-->
						<?php echo form_close()?>	
					   <!-- </form> -->
				
					</div>
				</div>	
			    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> --> <!--cambio -->
					<div id="formtxt">
						<section>
						   	<h1 data-wow-delay="0.5s" class="wow fadeInUp">Nivel Inicial</h1>
							<h2 data-wow-delay="0.75s" class="wow fadeInUp">Funci&oacute;n de Fin de A&ntilde;o</h2>
							<h3 data-wow-delay="1s" class="wow fadeInUp">"Fantas&iacute;a"</h3>
							
							<div data-wow-delay="1.25s" class="clock wow fadeInUp"></div>
								<div data-wow-delay="1.5s" class="wow fadeInUp" id="fecha">
								
									<strong>28/11 &middot; 20 hs.</strong>
									<span>TEATRO SARMIENTO (Av. Alem 34 Norte - Capital) </span>
								</div>
						</section>
					</div>	
				</div>
			</div>
					
			</div>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
					
				</div>
			</div>
	    </div>
	</div>
		
 <!--</div> -->
 <script type="text/javascript">

	function guardar(){    // alert("si guardo ");
        //var id_equipo= $('#equipo').val();
        var hayError = false; 
        var hError=false;    
        var dnia = $('#dnialumno').val();
       
        if( dnia !=='' ){
          
          console.log("estoy  guardando");
          console.log("Dni alumno");
          console.log(dnia);
          	$.ajax({
              type: 'POST',
              data: {dnia:dnia},
              url: 'guardar_inscripcion',  
              success: function(data){
              	console.log(data);
              	
              	//data = JSON.parse(data); para locsl
	           if (data.status==true) {
	      			
	              	$('#formulario').empty();
	 				//$('#formulario').remove();
					
	    			//$("#formulario").load("<?php //echo base_url(); ?>Asiento/cargardni/"+dnia+7"");
	    			$("#formulario").load("<?php echo base_url(); ?>/Asiento/index");
	    			// if(hError==true){
	    			// 	$('#error1').fadeOut('slow');
	    			// }
	    			// if( hayError==true)
	    			// 	$('#error').fadeOut('slow');
	    			  }
	    		  else {
	    			
		    	  		hError=true;
			          	$('#error1').fadeIn('slow');
			          	return;
			      	}
		          	if(hError == false){
		              	$('#error1').fadeOut('slow');
		          	}
	    		
//54370237		
//33848693
                    },
              error: function(result){
                    console.log ("entre por error");
                    console.log(result);
                  },
                  dataType: 'json'
            });

        }
        else {
        	hayError=true;
        	$('#error').fadeIn('slow');
         	return;
         	}
        	if(hayError == false){
            	$('#error').fadeOut('slow');
        	} 

 	}
	

</script>
