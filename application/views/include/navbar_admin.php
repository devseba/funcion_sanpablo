  <body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">



  <!-- Navbar

    ================================================== -->

 <div class="navbar navbar-fixed-top">

   <div class="navbar-inner">

     <div class="container">

       <div class="nav-collapse collapse" id="main-menu">

       <?if($this->session->userdata("email")){?>

            <ul class="nav pull-right" id="main-menu-right">

              <li><a rel="tooltip" 

                     href="<?=base_url('admin/Login/salir')?>">

                     Salir <i class="icon-share-alt"></i>

              </a></li>

            </ul>

          <?}?>

       </div>

     </div>

   </div>

 </div>

 <div class="container">



<!-- Masthead

================================================== -->

<header class="jumbotron subhead" id="overview"  style="margin-top: 60px;">

  <div class="row">

    <div class="span6">

      <h1>Función de Fin de Año </h1>

      <p class="lead">"FANTASÍA"</p>

    </div>

    <div class="span3 offset3 clearfix" style="margin-bottom: 2em;">

      <a><img src="<?=base_url('assets/img/logo_sanpablo.png')?>" alt="Colegio San Pablo" title="Colegio San Pablo" width="270" heigth="210"/></a>



    </div>

  </div>

</header>