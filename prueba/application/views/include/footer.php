     <div id="fin"></div>	
</div>	 <!-- fin div contenido -->
   
		
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="<?=base_url('assets/js/jquery-1.12.1.min.js');?>" type="text/javascript"></script> -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url('assets/bootstrap-3.3.6-dist/js/bootstrap.min.js');?>"></script>

<!-- wow -->
<script src="<?=base_url('assets/js/wow.min.js');?>"></script>

<script>new WOW().init();</script>

<!-- Bootbox -->
<script src="<?=base_url('assets/js/bootbox.min.js');?>"></script>

<!-- Notifi -->
<script src="<?=base_url('assets/js/bootstrap-notify.js');?>"></script>
<!-- Numeric -->
<script src="<?=base_url('assets/js/jquery.numeric.min.js');?>"></script>


<!-- flip clock-->

<!--<script src="<?=base_url('flipclock-master/compiled/flipclock.min.js')?>"></script> -->

<!-- http://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/ -->
<script type="text/javascript">
 $(document).ready(function(){
     $('#dni').numeric();  
	 
	 // Grab the current date
		var currentDate = new Date();

		// Set some date in the future
		var futureDate  = new Date("June 3 2016 18:59:59 GMT-03:00");

		// Calculate the difference in seconds between the future and current date
		var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

		// Instantiate a coutdown FlipClock
		clock = $('.clock').FlipClock(diff, {
			clockFace: 'DailyCounter',
			countdown: true,
			language:'es-es'
		});
		clockModal = $('.clockModal').FlipClock(diff, {
			clockFace: 'DailyCounter',
			countdown: true,
			language:'es-es'
		});
	//------- innovacion	
	$("#innovacion").on('click', function() {
      
     
	   $('#section_innovacion').show(); //muestro mediante id
	   $('#conferencia').hide();
    });	
	//-----------------------------------------
	$("#return_conferencia").on('click', function() {
		
     
	   $('#section_innovacion').hide(); //muestro mediante id
	   $('#conferencia').show();
	});	
	
	
	
 });//-- fin document ready
 
   // jquery Developer
    $("#form_inscripcion").submit(function(e) {
          
       
	//$('#asistir').click(function(e){ 
		e.preventDefault();
        var request = "<?echo site_url('inicio/inscripcion');?>";
		   $.ajax({
  			  // var urlRequest = "<?echo base_url('inicio/inscripcion');?>";
  				type: "POST",
  				url: request,
                dataType: 'json', //tipo de datos retornados
                data: $("#form_inscripcion").serialize(),
          
            success: function(data){
            console.log(data);
            //convertir el objeto JSON a texto
             var json_string = JSON.stringify(data);
            //convertir el texto a un nuevo objeto
             var obj = $.parseJSON(json_string);
             
             if(obj.status){
              bootbox.alert('<div>'+obj.message+'</div>', function() {
                
                      //-- notificacion bootstrap
                    
                    
                });
				          $("#email").focus();
						  $('#email').css("border:2px solid red"); 
					//---Blanquear los campos del formulario
					
					  $("#form_inscripcion").find('input').each(function() {
							  switch(this.type) {
								 
								 case 'text':
								      $(this).val('');
									  break;
								 case 'email':
									  $(this).val('');
									  break;
								 case 'checkbox':
								 case 'radio':
									  this.checked = false;
							  }
					   });
                    					
            }else{
                
				bootbox.alert('<div>'+obj.message+'</div>', function() {
                     
                      //-- notificacion bootstrap
                      
                      //$('#email').val("Ingrese Nuevamente");
                });
				//$('#email').focus();
				$('#email').val();
				
                //$('#email').css("border:2px solid red"); 
				
					  
            }
          
  					
  		},
  		error: function(response){
  				console.log(response);    
				bootbox.alert('<div>'+obj.message+'</div>', function() {
                     
                      //-- notificacion bootstrap
                      
                      //$('#email').val("Ingrese Nuevamente");
                });
				$('#email').focus();	
        }				
	  });

		   
	})
	   

</script>

</body>

</html>
