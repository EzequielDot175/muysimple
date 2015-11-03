<?php require_once("libs.php");

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
    <title>Revista Digital</title>
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
    <link rel="stylesheet" href="resources/styles/application.css" />

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
<header class="site-header HeaderNovedades">
    <div class="row Col_2Mobile">
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
                <li class="btnTiendaCelular"><a class="SelectorDistintoHover Anular" href="LaTienda.php" title="La Tienda"><span class="SelectorNegroHover Anular">La Tienda</span></a></li>
                <li ><a class="Menu " href="novedades.php" title="Novedades">Novedades</a></li>
                 <li class="SacarSeccionCelular" ><a class="Menu marcado" href="Revista.php" title="Revista">Revista</a>
                </li>
                <li ><a class="Menu" href="contacto.php" title="Contacto">Contacto</a></li>
          </ul>
        </nav>
    </div>
    
</header>
   <?php include_once('social.php'); ?>

<section class="site-RevistaDigital clearfix">
    <div class="row">
    <div class="ContenidoRevistaDigital clearfix">
        <div class="revista">
            <!-- Start -->
            <div class="item_revista">
                <!-- <span class="read">Leer</span> -->
                <img src="libros/thumb-01.png" alt="Libro 1">
                <div class="index_revista">
                    <span class="spn-title">Número 01</span>
                    <a href="libros/libro1.html">Ver Revista</a>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="item_revista">
                <!-- <span class="read">Leer</span> -->
                <img src="libros/thumb-02.png" alt="Libro 2 ">
                 <div class="index_revista">
                    <span class="spn-title">Número 02</span>
                    <a href="libros/libro2.html">Ver Revista</a>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="item_revista">
                <!-- <span class="read">Leer</span> -->
                <img src="libros/thumb-03.png" alt="Libro 3 ">
                 <div class="index_revista">
                    <span class="spn-title">Número 03</span>
                    <a href="libros/libro3.html">Ver Revista</a>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="item_revista">
                <!-- <span class="read">Leer</span> -->
                <img src="libros/thumb-04.png" alt="Libro 4">
                 <div class="index_revista">
                    <span class="spn-title">Número 04</span>
                    <a href="libros/libro4.html">Ver Revista</a>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="item_revista">
                <!-- <span class="read">Leer</span> -->
                <img src="libros/thumb-05.png" alt="Libro 5">
                 <div class="index_revista">
                    <span class="spn-title">Número 05</span>
                    <a href="libros/libro5.html">Ver Revista</a>
                </div>
            </div>
            <!-- End -->
        </div>




    <!-- <img class="ImagenRevistaDigital col" src="resources/images/RevistaDigital.png" width="184" height="168"/>
    <p class="text-site-RevistaDigital col">La <span class="NombreRevistaDigital">“Revista Muy Simple”</span> tiene como finalidad divulgar las actividades de la Fundación y es otro motivo de alegría para todos los que conformamos esta ONG. La distribución será totalmente gratuita y en los  próximos días saldrá el primer número. El mes próximo se podrá entrar desde esta página a su versión digital.</p>
    </div>   -->
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
                 <p><span class="FlechaNumero">›</span>(+54) 11 3970 7880   </p>
                 <p><!--<span class="FlechaNumero">›</span>(+54) 11 6870 5131  </p>--></div>
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
                <li><a href="QuienesSomos.php" title="La fundación">La fundación</a></li>
                <li><a href="capacitacion.php" title="Capacitación">Capacitación</a></li>
                <li><a href="emprendimientos.php" title="Emprendimientos">Emprendimientos</a></li>
                <li><a href="LaTienda.php" title="La tienda">La tienda</a></li>
                <li><a href="novedades.php" title="Novedades">Novedades</a></li>
                <li><a href="Revista.php" title="Revista">Revista</a></li>
                <li><a href="contacto.php" title="Contacto">Contacto</a></li>
      </ul>
      </nav>
    </div>
<div class="copyright SacarSeccionCelular"><div class="row">Copyright© - Todos los Derechos Reservados.</div></div>



</footer>
    

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
            window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
    </script>
    <script src="resources/scripts/application.js"></script>
</body>
</html>
