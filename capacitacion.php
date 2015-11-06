<?php require_once("libs.php") ?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <meta name="viewport" content="initial-scale=1">
    <meta name="twitter:description" content="">
    <?php 
        include LIBS_PATH.'/google-analitics.php';
     ?>
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
                <a class="Menu" href="QuienesSomos.php" title="La fundación">La Fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                <li ><a class="SubMenu" href="QuienesSomos.php#PerosnasFundacion" title="Quienes integramos la Fundación">Quienes Integramos La Fundación</a></li>
                </ul>
                </li>
                <li class="LaFundacion LaFundacionMobile SacarWeb">
                <a class="Menu" href="QuienesSomos.php" title="La fundación">La Fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                </ul>
                </li>
                <li><a class="Menu  marcado" href="capacitacion.php" title="Capacitación">Capacitación</a></li>
                 <li class="SacarSeccionCelular"><a class="Menu " href="emprendimientos.php" title="Emprendimientos">Emprendimientos</a>
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
                <li class="btnTiendaCelular"><a class="SelectorDistintoHover Anular" href="LaTienda.php" title="La tienda"><span class="SelectorNegroHover Anular">La Tienda</span></a></li>
                <li ><a class="Menu" href="novedades.php" title="Novedades">Novedades</a></li>
                <li ><a class="Menu" href="Revista.php" title="Revista">Revista</a>
                
                </li>
                <li ><a class="Menu" href="contacto.php" title="Contacto">Contacto</a></li>
          </ul>
        </nav>
   
    </div>
    
</header>
    <?php include_once('social.php'); ?>
 
 <section class="CabeceraMobile SacarWeb">Capacitación</section>
<section class="slider_principal">
    <button type="button" class="arrow-left slider-button left">
        	<span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right slider-button right">
        	<span class="icon sliderRight"></span>
        </button>
    <div class="swiper-container ">
    <div id="galeria_preloader">
          <img src="img/loading_spinner.gif" alt="Cargando...">
        </div>
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
    </div>

    <div class="pagination"></div>
</section>




<section class="site-requisitos clearfix" id="CapacitarseEsMuySimple">
	<div class="row"><div class="row"><h1 class="titulo-capacitarse SacarSeccionCelular text-center">Capacitarse es Muy Simple.</h1></div></div>
<div class="row Col_1Mobile clearfix">

    <section class="col_1 col requisitos RequisitosFondos">
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
                <div><div class="FlechaNumeroParticular">›</div><span class="MailComoAyudar">Una ficha técnica</span></div>
                <div><div class="FlechaNumeroParticular">›</div><span class="MailComoAyudar">Una entrevista personal </span></div>
                 </div>
          </div>
    </section>
    
    <section class="col_1 col requisitos RequisitosFondos Col_2Mobile">
    		
       
       <div class="clearfilx">
           <div class="icon ImagenTelefonoNegro"></div>
			<div class="contacto-data ContactoCapacitarse">	
                <h2>¿Tenés alguna inquietud?</h2>
                <p>Si querés consultar sobre nuestros cursos, la tienda, o colaborar, comunicate con nosotros:</p>
                <p><span class="FlechaNumero">›</span>(+54) 11 3970 7880  </p>
<!--				<p><span class="FlechaNumero">›</span>(+54) 11 6870 5131  </p></div> -->
			</div>
            </div>
    </section>
    
</section>

<section class="site-capacitarse cursos">
    	<div class="row">
    
    
    <section class="CursosDatos CapacitarceCursosDatos Col_1Mobile" style="margin-bottom:115px;">

    <?php require "functions/capacitacion_menu.inc.php"; traerCapacitacionMenu(); ?>
        
    
  
     
    </section>    
        </div>	
</section>

<section class="slider_testimonios" >
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
		<section class="col_Capacitacion col DetalleOficio clearfix">

    <?php 
    require "functions/capacitacion.inc.php";
    //traerCapacitacion();
    ?>       
           
            
        </section>
		
 	<!--<section class="col_Capacitacion_2 SacarSeccionCelular">
    	<article class="LikeFace"></article>
    	<article class="LikeFace"></article>
    </section> -->     
</div>
</section>

<?php include('footer.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="resources/scripts/libs/idangerous.swiper.min.js"></script>
   <script src="resources/scripts/application.js"></script>
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
