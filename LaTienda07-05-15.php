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
    <title>La Tienda</title>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=292171720799588&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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
                <li><a class="SubMenu" href="emprendimientos.php#EscuelaCostura" title="Escuela Muy Simple de Corte y Confección Industrial">Escuela Muy Simple de Corte y Confección Industrial</a></li>
                </ul>
                </li>
                 <li class="SacarSeccionCelular" ><a class="SelectorDistinto" href="LaTienda.php" title="La tienda"><span class="SelectorNegro">La tienda</span></a></li>
                <li class="btnTiendaCelular SacarWeb"><a class="SelectorDistintoHover Anular" href="LaTienda.php" title="La tienda"><span class="SelectorNegroHover Anular">La tienda</span></a></li>
                <li ><a class="Menu" href="novedades.php" title="Novedades">Novedades</a></li>
                 <li class="SacarSeccionCelular" ><a class="Menu" href="Revista.php" title="Revista">Revista</a>
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
        <a href="https://www.youtube.com/results?search_query=fundacion+muy+simple" title="You Tube" target="_blank" rel="nofollow">
            <span class="icon smYt"></span>
        </a>
    </div>

<section class="CabeceraMobile SacarWeb">Tienda</section>

<section class="slider_principal Tienda_slider_principal">
    <button type="button" class="arrow-left slider-button left">
        	<span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right slider-button right">
        	<span class="icon sliderRight"></span>
        </button>
    <div class="swiper-container ">
      <div class="swiper-wrapper">

      <?php require "functions/galeria_tienda.inc.php"; traerGaleriaTienda(); ?>
        
        <!-- <div class="swiper-slide FondoSlideTienda_1">
        <img class="" src="resources/images/slidertienda/image_012.jpg" alt="">
        </div> -->

    </div>
    <div class="pagination"></div>
    	<a href="#LaTiendaProductos"><div class="icon FlechaBlancaTarget SacarSeccionCelular"></div></a>
</section>

<section class="productos clearfix Col_1Mobile" id="LaTiendaProductos">
	<div class="row">
    		<header><h1 class="TituloProductos">Con tu compra estás ayudando a generar Capacitación y Trabajo.</h1></header>
    	<article class="LaTiendaIntro ">
        <h1>La Tienda</h1>
        <p>Un lugar donde podes encontrar productos originales, como almohadones, individuales, carteras, bolsos y manteles entre otros.
		   Los diseños y estampados están creados por la artista plástica Marina Dorignac.
        </p>
        <p>
        Estos son algunos de los productos que realizamos y/o comercializamos en el local. Con la compra de cualquier producto estas colaborando con la fundación, ayudando así a financiar los cursos y micro emprendimientos de La Fundación Muy Simple.
        </p>
        
    	<article class="CompartirFace">
        	<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
           <div class="SeguinosEnFace">
           <h2>Seguinos en</h2>
            <a href="https://www.facebook.com/tiendafundacionmuysimple?fref=ts" title="Compartir en Facebook" target="_blank" rel="nofollow" class="fblink">
                 <span class="icon smFbBlanco"></span>
                </a>
            </div>
        </article>
        
        </article>

        <?php 
        require "functions/tienda_prod.inc.php";
        echo ' <section class="ObjetosProducto clearfix SacarSeccionCelular">';
        traerProductos();
        echo '</section>';

       
        ?>
        
        
	<!-- <section class="slider_productos SacarSeccionCelular">
			<div class="slider-buttons">
    			<button type="button" class="ProductosSlider-button left">
        			<span class="icon ProductosSliderLeft"></span>
        		</button>
    			<button type="button" class="ProductosSlider-button right">
        			<span class="icon ProductosSliderRight"></span>
        		</button>
    		</div>
    		<div class="slider-elements">
    			<ul>
        			<li><a href="#" class="ActivePaginacion" >1</a></li>
            		<li><a href="#">2</a></li>
            		<li><a href="#">3</a></li>
            		<li><a href="#">4</a></li>
            		<li><a href="#">5</a></li>
            		<li><a href="#">6</a></li>
        		</ul>
    		</div>
		</section> -->
	</section>

 </div>
</section>

<section class="SacarWeb slider_testimonios MobieleSlider_Productos">
	<button type="button" class="arrow-left2 slider-button left">
        	<span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right2 slider-button right">
        	<span class="icon sliderRight"></span>
        </button>
    <div class="Testimonioswiper-container ProductosSwiper-container">
      <div class="swiper-wrapper ">
        <div class="swiper-slide "> 
          <div class="Col_1Mobile">
        	 <a href="#" class="Elemento clearfix" title="#title"><article class="ImagenesProductos">
            <figure><img src="resources/images/ImagenesTienda/producto_001.jpg" width="245" height="246"/></figure>
            <figcaption class="NombreProducto">Bolsa M Anclas</figcaption>
            </article>
        	</a>
          </div>
        </div>
        <div class="swiper-slide"> 
        	<div class="Col_1Mobile">
        	 <a href="#" class="Elemento clearfix" title="#title"><article class="ImagenesProductos">
            <figure><img src="resources/images/ImagenesTienda/producto_001.jpg" width="245" height="246"/></figure>
            <figcaption class="NombreProducto">Bolsa M Anclas</figcaption>
            </article>
        	</a>
            </div>
        </div>
        <div class="swiper-slide">
        	<div class="Col_1Mobile">
        	 <a href="#" class="Elemento clearfix" title="#title"><article class="ImagenesProductos">
            <figure><img src="resources/images/ImagenesTienda/producto_001.jpg" width="245" height="246"/></figure>
            <figcaption class="NombreProducto">Bolsa M Anclas</figcaption>
            </article>
        	</a>
            </div>
        </div>
      </div>
    </div>
    <div class="pagination"></div>
</section>





<section class="NovedadesDelaTienda clearfix ">
	<div class="row Col_1Mobile">
    		<header class="TiendaNovedades">
            <h1>Novedades de La Tienda</h1>
            <a href="novedades.php"><button type="button" class="ver-novedades btnVerTienda SacarSeccionCelular">Ver más novedades</button></a></header> 
    	 
         <?php require "functions/novedades-tienda.inc.php"; traerNovedadesTienda(); ?>
         <!-- <article class="NotasTienda col_1 col">
        <header>
            	<aside class="fecha">
            		<div class="fecha-mesDia">25/03</div>
            		<div class="fecha-ano">2014</div>
            	</aside> 
                <p class="parrafo-nota">Hola seguidores. Les contamos que a partir de esta semana ya contamos con tarjeta de crédito y nuevos productos. Gracias y los esperamos en la Tienda Fundación Muy Simple!!!.</p>
         	 </header>
        	 <img src="resources/reemplazables/nota_001.jpg" width="310" height="209"/>
        	 <div class="nota-share">
             	<a href="#" title="#" target="_blank" rel="nofollow" class="fblink">
                 <span class="icon smFbBlanco"></span>
                </a>
                <a href="#" title="#" target="_blank" rel="nofollow" class="twlink">
                <span class="icon smTwBlanco"></span>
                </a>
             </div>
             <a href="#"><span class="icon vineta nota-vineta"></span></a>
        </article> -->
       	 
    </div>
</section>

<footer class="site-pie clearfix">
	<div class="row clearfix">
	<a href="https://www.facebook.com/tiendafundacionmuysimple?ref=ts&fref=ts" title="Muy Simple Tienda" class="site-logo logoFooter">
	    	<img src="resources/images/logo_LaTienda.png" width="140" height="140" />
        </a> <section class="ubicacionTienda clearfix" style="position:relative">
	<div class="MobileMediaFooterTienda">
        <a href="https://www.facebook.com/tiendafundacionmuysimple?ref=ts&fref=ts" title="Compartir en Facebook" rel="nofollow">
            <span class="icon smFbMobile"></span>
        </a>
    	</div>
   
    	<h2>Dónde Estamos!</h2>
    	<span class="icon MarcadorMapaTienda"></span>
        <div class="contacto-dataTienda">
        <p>Peña 2715<br>
	    Ciudad Autónoma de<br>
    	Buenos Aires - Argentina<br>
    	</p>
        </div>
    </section>
    
   <section class="FormasContacto">
    <section class="datos-espacio">
    		<div class="clearfilx">
			 	<span class="icon ImagenTelefono"></span>
            <div class="contacto-dataTienda">
            	<span class="telefono-contacto">Teléfonos Tienda</span>
                 <p>(+54) 011 4804-8958</p>
            </div>
    </section>
    
    <section class="datos-espacio">
        <div class="clearfilx">
            <span class="icon ImagenMail"></span>
			<div class="contacto-dataTienda">	
                <span>Email Tienda</span>
                    <p><a href="#" title="mailto:tienda@muysimple.org">tienda@muysimple.org</a></p>
			</div>
        </div>
    </section>   
    
    <section class="datos-espacio">
        <div class="clearfilx">
            <span class="icon ImagenReloj"></span>
			<div class="contacto-dataTienda">	
                <span>Horarios</span>
                    <p>Lunes a Viernes: 10.30hs a 19.30hs<br>Sabados: 10.30hs a 13.30hs.<br>¡Los Esperamos!.</p>
			</div>
        </div>
    </section>
   	
        <p class="datos-espacio"><span class="VentaPorMayor">Por venta mayorista</span><a href="#" title="mailto:mayorista@muysimple.org"> | mayorista@muysimple.org</a></p>
   
    
    <div class=" MediaFooterTienda SacarSeccionCelular">
        <p>Visitanos en</p>
        <a href="https://www.facebook.com/tiendafundacionmuysimple?ref=ts&fref=ts" title="Compartir en Facebook" rel="nofollow">
            <span class="icon smFb"></span>
        </a>
    	</div>
   
   </section>
    </div>
    
     <section class="Localizacion">
         <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.648277683554!2d-58.40210860000001!3d-34.5877652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca9c667161e1%3A0x1d74ea44617d6e2b!2sPena+2715%2C+Buenos+Aires%2C+Ciudad+Aut%C3%B3noma+de+Buenos+Aires!5e0!3m2!1ses!2sar!4v1431013576973" width="2500" height="300" frameborder="0" style="border:0"></iframe></div>
     </section>
    
    
</footer>

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script src="resources/scripts/libs/jquery-1.10.2.min.js"></script>
	
    <script type="text/javascript" src="resources/scripts/libs/idangerous.swiper.min.js"></script>
   <script src="resources/scripts/application.js"></script>
  <script>
			window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
	</script>

</body>
</html>
