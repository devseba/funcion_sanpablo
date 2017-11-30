<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Funci&oacute;n Anual</title>

<!-- Favicon -->
<link href="<?= base_url('assets/img/favicon.ico?v=2') ?>" rel="shortcut icon" type="image/x-icon" /> 
<link href="<?= base_url('assets/img/favicon.ico?v=2') ?>" rel="icon" type="image/x-icon" /> 

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link href="<?=base_url('assets/bootstrap-3.3.6-dist/css/bootstrap.min.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css"/>
<!-- Styles -->
<link href="<?=base_url('flipclock-master/compiled/flipclock.css');?>" rel="stylesheet">
<link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
<link href="<?=base_url('assets/css/media-queries.css');?>" rel="stylesheet">
<link href="<?=base_url('assets/css/animate.css');?>" rel="stylesheet">

<!--bootstrap-notify -->
<link href="<?=base_url('assets/css/bootstrap-notify.css');?>" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url('assets/js/jquery-1.12.1.min.js');?>" type="text/javascript"></script>

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

<script src="<?=base_url('assets/js/jquery-ui.js');?>"></script>
<!-- flip clock-->

<script src="<?=base_url('flipclock-master/compiled/flipclock.min.js')?>"></script>

<script src="<?=base_url('assets/admin/js/bootstrap-modalmanager.js');?>" type="text/javascript"></script>
<!-- http://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/ -->
<script type="text/javascript">
    var clock;
	var clockModal;
 $(document).ready(function(){
     $('#dni').numeric();  
	 
	 // Grab the current date
		var currentDate = new Date();

		// Set some date in the future
		//ar futureDate  = new Date("June 3 2016 18:59:59 GMT-03:00");
		var futureDate  = new Date("November 28 2017 19:59:59 GMT-03:00");


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

</head>
<body>
	<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<a><img src="<?=base_url('assets/img/logo_sanpablo.png')?>" alt="Colegio San Pablo" title="Colegio San Pablo" width="270" heigth="210"/></a>
						<a><img src="<?=base_url('assets/img/iram_nuevo.jpg')?>" alt="Gobierno de San Juan" title="Gobierno de San Juan" width="110" heigth="80"/></a>
					</div>
				</div>
			</div>
	</header>