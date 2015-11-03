<?php require "resources/db.php"; ?>
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
    <title>Capacitación</title>
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
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="resources/styles/normalize.css" />
	<link rel="stylesheet" type="text/css" href="resources/styles/idangerous.swiper.css">
    <link rel="stylesheet" href="resources/styles/application.css"/>
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
    <script type="text/javascript">
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>

<body>
<header class="site-header clearfix">
	<div class="row clearfix Col_2Mobile">
    	<a href="index.php" title="Muy Simple" class="site-logo">
	    	<img src="resources/images/logo_muysimple.png" width="165" height="165" />
        </a>    
        <nav class="site-nav" id="menu">
        	 <a href="#" class="nav-mobile" id="nav-mobile"></a>
        	<ul class="BotoneraMenu">
            	<li class="btnTiendaCelular"><a class="btnHome"  href="index.php" title="Tienda Fundación">Home</a></li>
                <li class="LaFundacion SacarSeccionCelular">
                <a class="Menu" href="QuienesSomos.php" title="La fundación">La fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                <li ><a class="SubMenu" href="QuienesSomos.php#PerosnasFundacion" title="Quienes integramos la Fundación">Quienes integramos la Fundación</a></li>
                </ul>
                </li>
                <li class="LaFundacion LaFundacionMobile SacarWeb">
                <a class="Menu" href="QuienesSomos.php" title="La fundación">La fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                </ul>
                </li>
                <li><a class="Menu  marcado" href="capacitacion.php" title="Capacitación">Capacitación</a></li>
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
                <li><a class="SubMenu" href="emprendimientos.php#EscuelaCostura" title="Escuela Muy Simple de Corte y Confección Industrial">Escuela Muy Simple de Corte y Confección Industrial</a></li>
                </ul>
                </li>
                <li class="btnTiendaCelular"><a class="SelectorDistintoHover Anular" href="LaTienda.php" title="La tienda"><span class="SelectorNegroHover Anular">La tienda</span></a></li>
                <li ><a class="Menu" href="novedades.php" title="Novedades">Novedades</a></li>
                <li ><a class="Menu" href="Revista.php" title="Revista">Revista</a>
                 <ul class="EmprendimientosSubBotones SacarSeccionCelular">
                <li><a class="SubMenu" href="Revista Digital.php" title="Revista Online">Revista Online</a></li>
                </ul>
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
 
 <section class="CabeceraMobile SacarWeb">Capacitación</section>
<section class="slider_principal">
    <button type="button" class="arrow-left slider-button left">
        	<span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right slider-button right">
        	<span class="icon sliderRight"></span>
        </button>
    <div class="swiper-container ">
      <div class="swiper-wrapper">

      <?php require "functions/galeria_capacitacion.inc.php"; traerGaleriaCapacitacion(); ?>
        
        <!-- <div class="swiper-slide FotoCapacitacion ">
            <div class="row Col_1Mobile">
            <img class="slide-img" src="resources/images/sliderprincipal_Capacitacion/image_009.jpg" alt="Capacitación">
            	<a href="#CapacitarseEsMuySimple" title="Capacitacion"><div class="slider-data DiplomaCapacitacion"><h1>Capacitación</h1>
            		<p class="SacarSeccionCelular">Capacitarte es Muy Simple. Elegí el oficio<br> que te define.</p>
            			
            	</div></a>
        		
           </div>
         </div> -->
       
    </div>

    <div class="pagination"></div>
</section>




<section class="site-requisitos clearfix" id="CapacitarseEsMuySimple">
	<div class="row"><h1 class="titulo-capacitarse SacarSeccionCelular">Capacitarse es Muy Simple.</h1></div>
<div class="row Col_1Mobile clearfix">

    <section class="col_1 col requisitos">
    <h1>Capacitación</h1>
    <p class="requisitos-data Mobilerequisitos-data">Los cursos están dirigidos a personas de bajos recursos socioeconómicos desde los 18 años que deseen formarse en un oficio para insertarse en el mercado laboral. </p>
   		<h2 class=" TituloElegiTuCurso SacarSeccionCelular"> Elegí el curso que querés hacer.</h2>
    </section>
    
    <section class="col_1 col requisitos RequisitosFondos Col_2Mobile">
    	<div class="clearfilx">
            <div class="contacto-data requisitos-data">
            	<h2>Requisitos para Inscribirse</h2>
                 <div><div class="FlechaNumeroParticular">›</div><p>2 fotocopias del DNI</p></div>
                  <div><div class="FlechaNumeroParticular">›</div><p>Fotocopia del título secundario <span class="MailComoAyudar"> (sólo para Ejecutivo Contable y Secretariado Jurídico)</span></p></div>
                 <p>En la sede deberás completar:</p>                 
                <div><div class="FlechaNumeroParticular">›</div><span class="MailComoAyudar">un test psicológico y una ficha técnica</span></div>
                 </div>
          </div>
    </section>
    
    <section class="col_1 col requisitos RequisitosFondos Col_2Mobile">
    		
       
       <div class="clearfilx">
           <div class="icon ImagenTelefonoNegro"></div>
			<div class="contacto-data ContactoCapacitarse">	
                <h2>¿Tenés alguna inquietud?</h2>
                <p>Si querés consultar sobre nuestros cursos, la tienda, o colaborar, comunicate con nosotros:</p>
                <p><span class="FlechaNumero">›</span>(+54) 11 3970 3880  </p>
				<!--<p><span class="FlechaNumero">›</span>(+54) 11 6870 5131  </p>-->
				</div>
			</div>
            </div>
    </section>
    
</section>

<!--<section class="site-capacitarse cursos">
    	<div class="row">-->
    
    
    <!--<section class="CursosDatos CapacitarceCursosDatos Col_1Mobile">

    <?php // require "functions/capacitacion_menu.inc.php"; traerCapacitacionMenu(); ?>
        
     
    </section>    -->
        <!--</div>	
</section>-->

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
        

        
      </div> <!-- /no -->
    </div> <!-- /no -->
    <div class="pagination"></div>
</section>

<section class="site-capacitacion clearfix">
	<div class="row">
  <div id="aqui"></div>
		<section class="col_Capacitacion col DetalleOficio clearfix">

    <?php 
    require "functions/capacitacion.inc.php";
    require "functions/testimonios.inc.php";
    getCapacitacion();
    traerTestimonios();
    ?>       
           
            
        </section>
		
 	<section class="col_Capacitacion_2 SacarSeccionCelular">
    	<article class="LikeFace"></article>
    	<article class="LikeFace"></article>
    </section>      
</div>
</section>


<footer class="site-pie clearfix">
	<div class="row">
	<a href="index.php" title="Muy Simple" class="site-logo logoFooter">
	    	<img src="resources/images/logo_muysimple.png" width="140" height="140" />
      </a>
		<div class="MobileSocial-media">
        <a href="https://www.facebook.com/pages/Muy-Simple/108397055910812?fref=ts" title="Compartir en Facebook" target="_blank" rel="nofollow">
            <span class="icon MobileSmFb"></span>
        </a>
        <a href="https://www.youtube.com/fmuysimple" title="You tube" target="_blank" rel="nofollow">
            <span class="icon MobileSmYt"></span>
        </a>
    	</div>
    <section class="ubicacion col_1 col">
    <div class="clearfix">
    <span class="icon MarcadorMapaCelular col"></span>
    <div class="contacto-data data-ubicacion ">
    <h1 class="SacarSeccionCelular">Ubicación</h1>
    <p>Ruíz Huidobro 2570</p>
    <p>Ciudad Autónoma de Buenos Aires - Argentina</p>
    
    <a href="contacto.php" title="Como LLegar"><button type="button" class="suscribite ComoLLegar SacarSeccionCelular">
    	<span class="icon MarcadorMapaVerde"></span><span class="icon MarcadorMapa"></span>
        <span class="btn-text">Como llegar!</span>
    </button></a>
    </div>
    </div>
    </section>
    
    <section class="row espacio col_1 col">
    		<div class="row clearfilx">
			 	<span class="icon ImagenTelefono"></span>
            <div class="contacto-data">
            	<span class="telefono-contacto">Teléfono |</span>
                    <a href="#" title="Fundación muy simple" class="telefono-titulo">Fundación muy simple</a>
                 <p><span class="FlechaNumero">›</span>(+54) 11 3970 7880 </p>
				 <!--<p><span class="FlechaNumero">›</span>(+54) 11 6870 5131  </p>--></div>
            </div>
    </section>
    
    <section class="espacio col_1 col ">
    	
        <div class="social-media MediaFooter SacarSeccionCelular">
        <p>Redes Sociales</p>
        <a href="https://www.facebook.com/pages/Muy-Simple/108397055910812?fref=ts" title="Compartir en Facebook" target="_blank" rel="nofollow">
            <span class="icon smFb"></span>
        </a>
        <a href="https://www.youtube.com/fmuysimple" title="You tube" target="_blank" rel="nofollow">
            <span class="icon smYt"></span>
        </a>
    	</div>
    		
       
       <div class="clearfilx">
            <span class="icon ImagenMail"></span>
			<div class="contacto-data">	
                <span>Email</span>
                    <p><a href="#" title="mailto:info@muysimple.org">info@muysimple.org</a></p>
			</div>
      </div>
       <a href="contacto.php#HojaDeConsultas" title="Hacenos tu consulta">
       <button type="button" class=" hacer-consulta">Hacenos tu consulta</button>
       </a> 
    </section>
    
    
   <h1 class="subtitulo-footer SacarSeccionCelular">Trabajamos para que otros puedan trabajar.</h1>
   
   <nav class="site-nav btnsFooter ">
        	<ul>
                <li><a href="#" title="La fundación">La fundación</a></li>
                <li><a href="#" title="Capacitación">Capacitación</a></li>
                <li><a href="#" title="Emprendimientos">Emprendimientos</a></li>
                <li><a href="#" title="La tienda">La tienda</a></li>
                <li><a href="#" title="Novedades">Novedades</a></li>
                <li><a href="#" title="Revista">Revista</a></li>
                <li><a href="#" title="Contacto">Contacto</a></li>
      </ul>
      </nav>
    </div>
<div class="copyright SacarSeccionCelular"><div class="row">Copyright© - Todos los Derechos Reservados.</div></div>



</footer>
	



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="resources/scripts/libs/idangerous.swiper.min.js"></script>
   <script src="resources/scripts/application.js"></script>
  <script>
			window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
	</script>
</body>
</html>
