<?php require_once('libs.php');
  $novedades = new Novedades();
  $novCollection = $novedades->getNewsIndex();

 ?>
<!doctype html>
<!--[if lt IE 7]>
<html lang="" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<html lang="" class="no-js lt-ie10 lt-ie9 lt-ie8 ie7">
<![endif]-->
<!--[if IE 8]>
<html lang="" class="no-js lt-ie10 lt-ie9 ie8">
<![endif]-->
<!--[if IE 9]>
<html lang="" class="no-js lt-ie10 ie9">
<![endif]-->
<!--[if gt IE 9]><!--> 
<html lang="" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Muy simple</title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="" />
    <!--SIZES 57x57-->
    <link rel="apple-touch-icon-precomposed" href="" sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" href="" sizes="114x114" />
    <!-- OPEN GRAPH -->
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!--SIZES 200x200-->
    <meta property="og:site_name" content="" />
    <!--Twitter cards-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:domain" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:description" content="">
    
    <!-- STYLES -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
   
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="resources/styles/normalize.css" />
    <link rel="stylesheet" type="text/css" href="resources/styles/idangerous.swiper.css" />
    <link rel="stylesheet" href="resources/styles/application.css" />
	<link  href="resources/styles/celular.css" rel="stylesheet" type="text/css" />
    
    <!--[if IE]>
        <link  rel="stylesheet" href="resources/styles/iexplorer.css" />
        <script src="resources/scripts/libs/html5shiv.min.js"></script>
    <![endif]-->
    <!-- MODERNIZER -->
    <script src="resources/scripts/libs/modernizr-2.6.2.min.js"></script>

    <!-- ANALITYCS -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXX-X']);
        _gaq.push(['_trackPageview']);
    </script>
    
</head>

<body onLoad="MM_preloadImages('resources/images/FundacionOficios_Color.jpg','resources/images/FinanzasColor.jpg','resources/images/ProjectColor.jpg')">

<header class="site-header clearfix">
	<div class="row Col_2Mobile">
    	<a href="index.php" title="Muy Simple" class="site-logo">
	    	<img src="resources/images/logo_muysimple.png" width="165" height="165" />
        </a>    
       
        <nav class="site-nav" id="menu">
        	 <a href="#" class="nav-mobile" id="nav-mobile"></a>
        	<ul class="BotoneraMenu">
            	<li class="btnTiendaCelular"><a class="btnHome"  href="index.php" title="Tienda Fundación">Home</a></li>
                 <li class="LaFundacion SacarSeccionCelular">
                <a class="Menu" href="QuienesSomos.php" title="La Fundación">La fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones ">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                <li ><a class="SubMenu" href="QuienesSomos.php#PerosnasFundacion" title="Quienes integramos la Fundación">Quienes Integramos La Fundación</a></li>
                </ul>
                </li>
                <li class="LaFundacion LaFundacionMobile SacarWeb">
                <a class="Menu " href="QuienesSomos.php" title="La Fundación">La Fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                </ul>
                </li>
                <li><a class="Menu" href="capacitacion.php" title="Capacitación">Capacitación</a></li>
                <li class="SacarSeccionCelular"><a class="Menu " href="emprendimientos.php" title="Emprendimientos">Emprendimientos</a>
                <ul class="EmprendimientosSubBotones">
                <?php require 'functions/linkMenu.inc.php'; MenuEmprendimientos(); ?>
                <!-- <li><a class="SubMenu TinedaSubmenu" href="emprendimientos.php#TiendaEmprendimientos" title="Tienda Fundación">Tienda Fundación</a></li>
                <li><a class="SubMenu" href="emprendimientos.php#EscuelaCostura" title="Escuela Muy Simple de Corte y Confección Industrial">Escuela Muy Simple de Corte y Confección Industrial</a></li> -->
                </ul>
                </li>
                <li class="LaFundacion EmprendimientosMobile SacarWeb">
                <a class="Menu" href="emprendimientos.php" title="Emprendimientos">Emprendimientos<span class="FlechaSubMenu"></span></a>
                <ul class="EmprendimientosSubBotones">
                <li><a class="SubMenu TinedaSubmenu" href="emprendimientos.php#TiendaEmprendimientos" title="Tienda Fundación">Tienda Fundación</a></li>
                <li><a class="SubMenu" href="emprendimientos.php#EscuelaCostura" title="Escuela Muy Simple de Corte y Confección Industrial">Escuela Muy Simple De Corte y Confección Industrial</a></li>
                </ul>
                </li>
                <li class="btnTiendaCelular"><a class="SelectorDistintoHover Anular" href="LaTienda.php" title="La Tienda"><span class="SelectorNegroHover Anular">La Tienda</span></a></li>
                <li ><a class="Menu" href="novedades.php" title="Novedades">Novedades</a></li>
                 <li class="SacarSeccionCelular" ><a class="Menu" href="Revista.php" title="Revista">Revista</a>
                </li>
                <li ><a class="Menu" href="contacto.php" title="Contacto">Contacto</a></li>
          </ul>
        </nav>
    </div>
</header>
<div class="social-media">
	<a href="https://www.facebook.com/pages/Muy-Simple/108397055910812?fref=ts" title="Facebook" target="_blank" rel="nofollow">
		<span class="icon smFb"></span>
	</a>
	<a href="https://www.youtube.com/fmuysimple" title="You Tube" target="_blank" rel="nofollow">
		<span class="icon smYt"></span>
	</a>
</div>
<section class="slider_principal">
    <button type="button" class="arrow-left slider-button left">
          <span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right slider-button right">
          <span class="icon sliderRight"></span>
        </button>
    <div class="swiper-container">
      <div class="swiper-wrapper">
      
      <!--  <div class="swiper-slide PlacaDonaciones">
       <a href="QuienesSomos.php">
       <div class=" PlacaInvisible SacarSeccionCelular"></div>
        </a> 
       
       <div class="row SacarWeb Col_1Mobile Text-Donaciones clearfix">
        <h1>Donaciones</h1>
        <h1>Capacitación</h1>
        <h1>Inserción Laboral</h1>
        <h1>Emprendimientos</h1>
        <h1 ><a href="#contenedor"><span class="icon FlechaDonaciones"></span></a></h1>
        </div>
        
        
        </div> -->
        <!-- /swiper-slide PlacaDonaciones -->

        <?php 
            require "functions/galeria_home.inc.php";
            traerGaleriaPrincipal();
        ?>


      </div> <!-- /swiper-wrapper -->
      <div id="galeria_preloader">
          <img src="img/loading_spinner.gif" alt="Cargando...">
        </div>
    </div> <!-- /swiper-container -->
</section>


<section id="contenedor" class="clearfix">
	<div class="row clearfix">
     	<h1 class="TituloIndex">Trabajamos para que otros puedan trabajar.</h1>
    <div class="col_2 col clearfix Col_Mobile_Mitad">
		
     		<div class="quienes">
            <a href="QuienesSomos.php" title="Quienes somos"><span class="icon vineta"></span></a><h2><a href="QuienesSomos.php">Quienes somos</a></h2>
            <p>Somos una fundación que cree que el trabajo es el instrumento
            principal para concretar tus sueños, identidad, libertad y la 
            construcción de una sociedad más justa y equitativa.</p>
            </div>
     		<div class="quienes">
            <a href="QuienesSomos.php" title="Que hacemos"><span class="icon vineta"></span></a><h2><a href="QuienesSomos.php">Que hacemos</a></h2>
            <p>Capacitamos en distintos oficios para facilitar la inserción y 
            reinserción laboral de personas de bajos recursos socio-económicos.</p>
            
            </div>
	
    
    </div>
	<div class="col_1 col CirculoMobile">
			<div class="circulo"><a href="capacitacion.php"><div class="circulo-interno"><p class="Capacitarme">Capacitarme</p></div></a></div>
			<div class="circulo"><a href="QuienesSomos.php#SeccionComoAyudar"><div class="circulo-interno"><p class="ayuda">Ayudar</p></div></a></div>
	</div>
    </div>
</section>

<section class="slider_testimonios">
	<button type="button" class="arrow-left2 slider-button left">
        	<span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right2 slider-button right">
        	<span class="icon sliderRight"></span>
        </button>
    <div class="Testimonioswiper-container ">
      <div class="swiper-wrapper">

      <?php require "functions/testimonios_gral.inc.php"; traerTestimoniosGral(); ?>
           
      </div>
    </div>
    <div class="pagination"></div>
</section>

	
<section class="novedades">
      <div class="row clearfix">
      <aside class="col_1 col formulario_novedades">
      <h2 class="TituloNovedades">Novedades</h2>
     	<div class="FormularioNone">
  		  <a href="novedades.php" title="Ver más novedades">
          <button type="button" class="ver-novedades">Ver más novedades</button>
        </a>
			  <p style="color:#333">Dejanos tu mail para recibir información sobre nuestros cursos y proyectos</p>
      
      <?php  
      require "functions/suscripcion.inc.php";

      if(isset($_POST['submit2'])) {
      Suscripcion();
      }
      ?>

      <form action="" method="post">
     		<span>*Nombre y apellido</span>
     	<input name="nombre_apellido" type="text" class="datos-novedades" required>
     		<span>*Email</span>
	 	<input name="email" type="text" class="datos-novedades" required>
 	  	<!-- 	<span>*Datos requeridos</span>
			<span class="Type-code capcha">Escriba el codigo que se lee</span>	
		<input name="" type="text" class="introducir-codigo capcha" >
		 
		<button type="button" class="refresh"><span class="icon ImagenRefresh"></span></button> 
		<img class="codigo" src="resources/images/codigo.jpg" width="256" height="74" /> -->
        </div>
		<input type="submit" name="submit2" class="suscribite Btn_SuscribirHome" id="btn_Activa" value="Suscribite">
    </form><!-- /form -->
</aside>



<!-- NOTAS -->


<section class="col_2 col Ver más NotasIndex mt73">

    <?php foreach($novCollection as $kcol => $vcol): ?>
    <article class="notas notas_home">
          <header class="cabeza-notas">
              <aside class="fecha">
                <div class="fecha-mesDia"><?php echo $vcol->fecha->day."/".$vcol->fecha->month ?></div>
                <div class="fecha-ano"><?php echo $vcol->fecha->year ?></div>
              </aside>
            <h2><a href="novedades-detalle.php?id=<?php echo $vcol->id ?>"><?php echo $vcol->titulo ?></a></h2>
          </header>
           <p><?php echo Utils::limitText($vcol->detalle, 200); ?>...</p>
           <div class="nota-share">
              <a href="http://www.facebook.com/sharer.php?u=http://www.muysimple.org/novedades-detalle.php?id=<?php echo $vcol->id ?>&t=<?php echo $vcol->titulo ?>" title="Compartir en Facebook" target="_blank" rel="nofollow" class="fblink">
                 <span class="icon smFbBlanco"></span>
                </a>
                <a href="https://twitter.com/intent/tweet?original_referer=http://www.muysimple.org/novedades.php&amp;text=<?php echo $v->titulo ?>&amp;tw_p=tweetbutton&amp;url=http://www.muysimple.org/novedades.php&amp;via=fmuysimple">
                    <span class="icon smTwBlanco"></span>
                </a>
             </div>
             <a href="novedades-detalle.php?id=<?php echo $vcol->id ?>"><span class="icon vineta nota-vineta"></span></a>
        </article>
    <?php endforeach; ?>
    
       
    
        
     <button type="button" class="ver-novedades SacarWeb btnNovedadesIndex">Ver más novedades</button>
    </section>



    <!-- End noticias -->

  </div>
</section>	
	
<section class="revista-muySimple SacarSeccionCelular"> 
    
    <header class="cabeza-revista"></header>
    
    <div class="row clearfix">
    	<section class="col_2 col">
        <a href="Revista.php"><h1 class="revistaMuySimple">Revista muy simple</h1></a>

    <div class="row">
        <div class="revista">
            <!-- Start -->
            <div class="item_revista item_revista_home">
                <!-- <span class="read">Leer</span> -->
                <img src="libros/thumb-05.png" alt="Libro 5">
                 <div class="index_revista">
                    <span class="spn-title">Número 05</span>
                    <a href="libros/libro5.html">Ver Revista</a>
                </div>
            </div>
            <!-- End -->
        </div>



       <?php //require "functions/revista.inc.php";
        //traerRevistaHome(3);
        ?>
      
        
 </section>
    
    <aside class="col_1 col" id="comoNosConosiste">
       <div>
       <button type="button" class="ver-novedades tienda btn_Online">
       	<span class="icon libroOnline"></span><span class="btn-revista">Revista Online</span>
       </button>
       <header class="cabeza-comoNosConosiste">
       
       </header>
       			 <h1>¿Cómo nos conocisite?</h1>

        <?php  
        require "functions/encuestas.inc.php";


        if(isset($_POST['submit'])) {
        insertEncuesta();
        }

        ?>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
  $(document).ready(function(){
  $('.seleccion').on('click', '.radio:checked', function() {
      console.log($(this));
      if ($(this).attr('checked')) {
          $(this).removeAttr('checked');
      } else {
          $(this).attr('checked', true);
      }

  });
  });
</script>     
            <form class="seleccion" name="form1" method="post" action="">
             
            <input type="radio" name="option" id="radio1" class="radio" value="Sitio Web" style="display:none" checked/>
            <label for="radio1">Sitio web</label>
       
          <input type="radio" name="option" id="radio2" class="radio" value="Tienda" style="display:none" />
            <label for="radio2">Tienda</label>
             
            <input type="radio" name="option" id="radio3" class="radio" value="Revista" style="display:none"/>
                 <label for="radio3"> Revista</label>
                 
            
            <input type="radio" name="option" id="radio4" class="radio" value="Facebook" style="display:none">
                 <label for="radio4">Facebook</label>
                 
               
             <input type="radio" name="option" id="radio5" class="radio" value="Avisos en vía pública" style="display:none">
                 <label for="radio5">Avisos en vía pública</label>
            
           
            <input type="radio" name="option" id="radio6" class="radio" value="Youtube" style="display:none">
                <label for="radio6"> YouTube</label>
             
             
            <input type="radio" id="radio7" name="option" class="radio" style="display:none">
                <label for="radio7">  Otros (Por favor especifique)</label>
             
            
            <p><input name="otros" type="text" class="EspecificarCampo"></p>

          <input type="submit" name="submit" class="suscribite enviarConocer" value="Enviar" style="margin-bottom: 30px;">
         </form>
       
    </div>
     </aside>
    </div>
</section>
	
<section class="cursos ">
	<header class="cabeza-revista"></header>
    	<div class="row">
    
    <header class="cabeza-cursos Col_2Mobile">
    	<div class="TituloSubtitulo">
    		<h1>Capacitaciones</h1>
       <span class="subtituloCursos">Capacitarte es Muy Simple. Elegí el oficio que te define.</span>
       </div>
    <a href="capacitacion.php"><button type="button" class="ver-novedades ConoceCursos">Conocé nuestros cursos</button></a> 
    </header>

    <div class="FormularioNone">
    <section class="CursosDatos">

    <?php require "functions/capacitacion_menu.inc.php"; traerCapacitacionMenu(); ?>
        
   <!-- /aca --> 
    
    </section>
    </div>   
        </div>	
</section>

<div style="padding-top: 200px;"></div>
<?php include("empresas-section.php") ?>

<?php include('footer.php') ?>
	
	<div class="LocalizacionMobile SacarWeb clearfix" style="background:white; width:200px;   margin: 0 auto;"><div style="margin:0 auto;"><a href="mailto:estudio@dot175.com"><img style="margin-left: 35px; margin-top: 3px;" src="logos/rednet_logo.png"></a><a href="mailto:estudio@dot175.com"><img src="logos/dot175_logo.png"></a></div></div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	
    <script type="text/javascript" src="resources/scripts/libs/idangerous.swiper.min.js"></script>
   <script src="resources/scripts/application.js"></script>
   
</body>
</html>
