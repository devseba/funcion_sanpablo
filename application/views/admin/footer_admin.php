</div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="<?=base_url('assets/admin/js/jquery.smooth-scroll.min.js');?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url('assets/bootstrap-3.3.6-dist/js/bootstrap.min.js');?>"></script>	
<script src="<?=base_url('assets/admin/js/bootswatch.js');?>"></script>
<!--<script src="<?//=base_url('assets/js/jquery.dataTables.min.js');?>"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.js"></script>

<!-- http://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/ -->
<script type="text/javascript">
 
  // jquery Developer
  $(document).ready(function() {
    $('#tabla_inscriptos').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ resultados por página",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search" : "Buscar:",
		    paginate: {
		        first:      "Primero",
		        previous:   "Anterior",
		        next:       "Siguiente",
		        last:       "Ultimo"
		    } 
        }
    });
	$('#check').on('click', function() {
       alert("ingrea");
        // do stuff here. It will fire on any checkbox change

   }); 
   
  });
  
  
</script>
<!--
  <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>-->
  </body>
</html>