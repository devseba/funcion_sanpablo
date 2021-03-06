 	<div id="manes">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-lg-offset-5 col-md-7 col-md-offset-5 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
						
						<div id="home">	
							<section>
								<h6 data-wow-delay="0" class="wow fadeInUp">Conferencia Abierta</h6>
								<h1 data-wow-delay="0.5s" class="wow fadeInUp">Dr. Facundo Manes</h1>
								<h2 data-wow-delay="0.75s" class="wow fadeInUp">Innovaci&oacute;n y Creatividad</h2>
								<h3 data-wow-delay="1s" class="wow fadeInUp">Claves del Futuro</h3>
								
								<div data-wow-delay="1.25s" class="clock wow fadeInUp"></div>
								
								<div data-wow-delay="1.5s" class="wow fadeInUp" id="fecha">
									<strong>03/06 &middot; 19 hs.</strong>
									<span>Estadio Cerrado Aldo Cantoni</span>
								</div>
							</section>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
						<div id="auspician">
							Auspician:
							<a class="wow fadeInUp"><img src="<?=base_url('assets/img/logo-gobierno-de-san-juan.png');?>" alt="Gobierno de San Juan" title="Gobierno de San Juan" height="60"/></a>

							<img class="wow fadeIn hidden-xs" src="<?=base_url('assets/img/divisor.jpg');?>" alt="" height="60"/>

							<a data-wow-delay="0.5s" class="wow fadeInUp"><img src="<?=base_url('assets/img/secretaria-de-deportes.jpg')?>" alt="Secretar&iacute;a de Deportes" title="Gobierno de San Juan" height="60"/></a>

							<a data-wow-delay="0.75s" class="wow fadeInUp"><img src="<?=base_url('assets/img/ministerio-de-salud-publica.jpg')?>" alt="Ministerio de Salud P&uacute;blica" title="Ministerio de Salud P&uacute;blica" height="60"/></a>
							<a data-wow-delay="1s" class="wow fadeInUp"><img src="<?=base_url('assets/img/ministerio-de-educacion.jpg')?>" alt="Ministerio de Educaci&oacute;n" title="Ministerio de Educaci&oacute;n" height="60"/></a>
							<section class="text-center">
								<a data-wow-delay="1.25s" class="wow fadeInUp"><img src="<?=base_url('assets/img/logo-osde.jpg')?>" alt="OSDE" title="OSDE" height="78"/></a>
								<a data-wow-delay="1.5s" class="wow fadeInUp"><img src="<?=base_url('assets/img/logo-banco-san-juan.jpg')?>" alt="Banco San Juan" title="Banco San Juan" height="78"/></a>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Modal manes -->	
	<div class="modal fade" id="modal-manes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<section>
						<h6>Conferencia Abierta</h6>
						<h1>Dr. Facundo Manes</h1>
						<h2>Innovaci&oacute;n y Creatividad</h2>
						<h3>Claves del Futuro</h3>
						
						<div class="clockModal"></div>
						
						<div id="fecha">
							<strong>03/06 &middot; 19 hs.</strong>
							<span>Estadio Cerrado Aldo Cantoni</span>
						</div>
					</section>
				</div>
				
			</div>
		</div>
	</div>
<!-- modal -->
<script type="text/javascript">
   $(document).ready(function(){
    //$(window).load(function(){
		
        $('#modal-manes').modal('show');

    });
</script>