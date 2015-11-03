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
    <title>Emprendimientos</title>
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
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    
    
    
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="resources/styles/normalize.css" />
    <link rel="stylesheet" type="text/css" href="resources/styles/idangerous.swiper.css">
    <link rel="stylesheet" href="resources/styles/application.css" />
	<link  href="resources/styles/celular.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="resources/styles/lytebox.css">
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
                <a class="Menu" href="QuienesSomos.php" title="La Fundación">La Fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                <li ><a class="SubMenu" href="QuienesSomos.php#PerosnasFundacion" title="Quienes Integramos La Fundación">Quienes Integramos La Fundación</a></li>
                </ul>
                </li>
                <li class="LaFundacion LaFundacionMobile SacarWeb">
                <a class="Menu" href="QuienesSomos.php" title="La Fundación">La Fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                </ul>
                </li>
                <li><a class="Menu" href="capacitacion.php" title="Capacitación">Capacitación</a></li>
                 <li class="SacarSeccionCelular"><a class="Menu marcado" href="emprendimientos.php" title="Emprendimientos">Emprendimientos</a>
                <ul class="EmprendimientosSubBotones">
                <?php require 'functions/linkMenu.inc.php'; MenuEmprendimientos(); ?>
               <!--  <li><a class="SubMenu TinedaSubmenu" href="emprendimientos.php#TiendaEmprendimientos" title="Tienda Fundación">Tienda Fundación</a></li>
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
                <li class="btnTiendaCelular"><a class="SelectorDistintoHover Anular" href="LaTienda.php" title="La Tienda"><span class="SelectorNegroHover Anular">La Tienda</span></a></li>
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
<section class="CabeceraMobile SacarWeb">
		<span>Emprendimientos</span><br> <span class="MobileTituloEmprendimiento">/ Tienda Fundación Muy Simple</span>
</section>

<section class="slider_principal">
    <button type="button" class="arrow-left slider-button left">
        	<span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right slider-button right">
        	<span class="icon sliderRight"></span>
        </button>
    <div class="swiper-container ">
      <div class="swiper-wrapper">

      <?php
      require "admin/class/class.emprendimiento.php";
            Emprendimientos::galeria();
      ?>
        
        </div> -->

    </div>
    <div class="pagination"></div>
</section>

<section class="site-emprendimiento clearfix ">
	<div class="row Contenedor-Emprender">
    	<h1>Trabajamos para que otros puedan trabajar.</h1>    
    </div>
</section>

<?php require "functions/emprendimientos.inc.php"; traerEmprendimiento(); ?>



<section class="novedades SombraEmprendiminetos">
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

      if(isset($_POST['submit'])) {
      Suscripcion();
      }
      
      ?>
      <form action="" method="post">
     		<span>*Nombre y apellido</span>
     	<input name="nombre_apellido" type="text" class="datos-novedades" >
     		<span>*Email</span>
	 	<input name="email" type="text" class="datos-novedades">
 	  		<!-- <span>*Datos requeridos</span>
			<span class="Type-code capcha">Escriba el codigo que se lee</span>	
		<input name="" type="text" class="introducir-codigo capcha" >
		 
		<button type="button" class="refresh"><span class="icon ImagenRefresh"></span></button> 
		<img class="codigo" src="resources/images/codigo.jpg" width="256" height="74" /> -->
        </div>
		<input type="submit" name="submit" class="suscribite Btn_SuscribirHome" id="btn_Activa" value="Suscribite">
    </form><!-- /form -->
</aside>


<section class="col_2 col Ver más NotasIndex ">

      
      <?php require "functions/novedades.inc.php"; traerNovedades(); ?>
		
    <!-- <article class="notas col_1 PrimeraNota">
        	<header class="cabeza-notas">
            	<aside class="fecha">
            		<div class="fecha-mesDia">25/03</div>
            		<div class="fecha-ano">2014</div>
            	</aside>
        		<h2><a href="novedades-detalle.html">Curso de Microcemento.</a></h2>
       	  </header>
        	 <p>Este año se incorporó el Curso de Microcemento, dictado por el profesor BLA BLA BLA, en la sede de San Cayetano, cuzco 220 en el barrio de Liniers.</p>
        	 <div class="nota-share">
             	<a href="#" title="Compartir en Facebook" target="_blank" rel="nofollow" class="fblink">
                 <span class="icon smFbBlanco"></span>
                </a>
                <a href="#" title="Compartir en Twiter" target="_blank" rel="nofollow" class="twlink">
                <span class="icon smTwBlanco"></span>
                </a>
             </div>
             <a href="novedades-detalle.html"><span class="icon vineta nota-vineta"></span></a>
        </article> -->
 		
       </div>
</section>	

<footer class="site-pie clearfix">
	<div class="row Col_1Mobile">
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
    <section class="ubicacion col_1 col Col_1Mobile">
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
    
    <section class="row espacio col_1 col CentrarMobile">
    		<div class="row clearfilx">
			 	<span class="icon ImagenTelefono"></span>
            <div class="contacto-data">
            	<span class="telefono-contacto">Teléfono |</span>
                    <a href="#" title="Fundación muy simple" class="telefono-titulo">Fundación muy simple</a>
                 <p><span class="FlechaNumero">›</span>(+54) 11 3970 7880  </p>
				 <p><!--<span class="FlechaNumero">›</span>(+54) 11 6870 5131  </p>--></div>
            </div>
    </section>
    
    <section class="espacio col_1 col CentrarMobile">
    	
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
       <button type="button" class="hacer-consulta">Hacenos tu consulta</button>
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
	

<!--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
			window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
	</script>
		<script type="text/javascript" src="resources/scripts/libs/jquery-2.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<script src="resources/scripts/libs/jquery-1.10.2.min.js"></script>  
  <script type="text/javascript" src="resources/scripts/libs/idangerous.swiper.min.js"></script>
   <script src="resources/scripts/application.js"></script>
   <script src="resources/scripts/lytebox.js"></script>
  <script>
			window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
	</script>
<script>

$(document).ready(function() {
    
$(window).scroll( function(){
    
$('.hideme').each( function(i){
            
var bottom_of_object = $(this).position().top + $(this).outerHeight();
var bottom_of_window = $(window).scrollTop() + $(window).height();
            
if( bottom_of_window > bottom_of_object ){
                
$(this).animate({'opacity':'1'},500);
}
}); 
});
});
</script>
</body>
</html>
