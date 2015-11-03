<?php
    require_once("libs.php");
    require_once('admin/class/class.galeria.php');
    require_once("admin/class/class.empresas.php");
   
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
    <title>La Fundación</title>
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


  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>


</head>

<body>

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
                <a class="Menu marcado" href="QuienesSomos.php" title="La fundación">La Fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                <li class="s" ><a class="SubMenu" href="QuienesSomos.php#PerosnasFundacion" title="Quienes Integramos La Fundación">Quienes Integramos La Fundación</a></li>
                </ul>
                </li>
                <li class="LaFundacion LaFundacionMobile SacarWeb">
                <a class="Menu" href="QuienesSomos.php" title="La fundación">La Fundación<span class="FlechaSubMenu"></span></a>
                <ul class="SubBotones">
                <li><a class="SubMenu" href="QuienesSomos.php#ContieneQuienesSomos" title="Fundacion Muy Simple">Fundación Muy Simple</a></li>
                <li><a class="SubMenu" href="QuienesSomos.php#SeccionComoAyudar" title="Cómo Ayudar">¿Cómo Ayudar?</a></li>
                </ul>
                </li>
                <li><a class="Menu" href="capacitacion.php" title="Capacitación">Capacitación</a></li>
                 <li class="LaFundacion EmprendimientosMobile SacarSeccionCelular">
                <a class="Menu" href="emprendimientos.php" title="Emprendimientos">Emprendimientos<span class="FlechaSubMenu"></span></a>
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
                <li><a class="SubMenu" href="emprendimientos.php#EscuelaCostura" title=""></a></li>
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

<section class="CabeceraMobile SacarWeb">
		<span>La Fundación</span>
</section>

<!-- <section class="slider_principal">
    <div class="PlacaQuienesSomos PlacaDonaciones">
    	 <div class="row SacarWeb Col_1Mobile Text-Donaciones clearfix">
        <h1>Donaciones</h1>
        <h1>Capacitación</h1>
        <h1>Inserción Laboral</h1>
        <h1>Emprendimientos</h1>
        <h1 ><span class="icon FlechaDonaciones"></span></h1>
        </div>
    </div>
</section> -->

<section class="slider_principal">
    <button type="button" class="arrow-left slider-button left">
          <span class="icon sliderLeft"></span>
        </button> 
    <button type="button" class="arrow-right slider-button right">
          <span class="icon sliderRight"></span>
        </button>
    <div class="swiper-container">
      <div class="swiper-wrapper">
     
        <?php 
        Galeria::Fundacion();
        ?>


      </div> <!-- /swiper-wrapper -->
      <div id="galeria_preloader">
          <img src="img/loading_spinner.gif" alt="Cargando...">
        </div>
    </div> <!-- /swiper-container -->
</section>


<section class="site-QuienesSomos clearfix" id="ContieneQuienesSomos">
	<div class="row Col_1Mobile">
        		<h1 class="TituloSite-QuienesSomos" >Trabajamos para que otros puedan trabajar.</h1>
            <div class="col_2 col MobileSobreFundacion">
                	
                    <h2 class="TituloSecundarioQuienes">Fundación Muy Simple</h2>
                   	<p class="text-QuienesSomos"> Somos una fundación sin fines de lucro organizada por un grupo de personas que cree que el trabajo es un derecho fundamental del ser humano. 
                    </p>
					<p class="text-QuienesSomos ">Nuestro objetivo es la inserción laboral y social de individuos pertenecientes a sectores de la comunidad de menores recursos.
                    </p>  
					<p class="text-QuienesSomos">Entendemos que la mejor manera de lograr nuestro objetivo es la capacitación a través de la formación y enseñanzas de oficios, dando instrumentos educativos para recuperar la cultura del trabajo que supieron tener nuestros abuelos y padres; y apoyando la puesta en marcha de microemprendimientos que  logren la inclusión de la porción de la comunidad con escasos recursos socioeconómicos.
                    </p>
        	</div>
        
        <div class="col_1 col Col_2Mobile ContenedorCirculos">
			<div class="circulo"><a href="capacitacion.php"><div class="circulo-interno"><p class="Capacitarme">Capacitarme</p></div></a></div>
			<div class="circulo"><a href="#SeccionComoAyudar"><div class="circulo-interno"><p class="ayuda">Ayudar</p></div></a></div>
		</div>
        
        
	<div class="MediaQuienesSomos Col_1Mobile">
    	<div class="VideoQuienesSomos">
        <iframe src="https://www.youtube.com/embed/uNaxGxsT6MY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>        
        

 	<div class="SocialQuienesSomos">
        <a href="https://www.facebook.com/pages/Muy-Simple/108397055910812?fref=ts" title="/Muy-Simple" target="_blank" rel="nofollow" class="fblink">
        <span class="icon smFbBlanco"></span>
        </a>
        <a href="https://twitter.com/fmuysimple" title="@fmuysimple" target="_blank" rel="nofollow" class="twlink">
        <span class="icon smTwBlanco"></span>
        </a>
    </div>	        
        
	
    <img class="FlechaCompartir" src="resources/images/flecha.png" width="97" height="60"/>
    
    <h2 class="TituloFlechaComparte SacarWeb">Compartí<br>nuestra obra</h2>        
     
     </div>
</section>

<section class="QuererAyudar clearfix" id="SeccionComoAyudar">
		<div class="row Col_1Mobile">
    
	<section class="ComoAyudar col_2 col clearfix">
		
   	<section class="clearfix InfoComoAyudar">
    <h1>¿Cómo Ayudar?</h1>
    	<article class="dataComoAyudar Col_1Mobile">
        <p>Muy Simple es una ONG que ha logrado cumplir los objetivos propuestos gracias a la colaboración de aquellos que creen en nuestro proyecto. Para nosotros es fundamental la ayuda solidaria de personas o instituciones que quieran apoyar nuestro trabajo.  
        </p>
        </article>
        <article class="dataComoAyudar Col_1Mobile">
       
                <p><span class="Text-Interesado">Si estás interesado en colaborar, por favor comunícate con nosotros o envianos un email a:</span> <span class="MailComoAyudar"><a href="mailto:info@muysimple.org">info@muysimple.org</a></span></p>
                <p class="MailComoAyudar"><span class="FlechaNumero">›</span>(+54) 11 3970 7880</p>
				<!--<p class="MailComoAyudar"><span class="FlechaNumero">›</span>(+54) 11 6870 5131  </p>-->
			
        </article>
    </section>

    <section class="Donaciones clearfix col">
    	<article class="Colaboraciones">
        	<h1>Donaciones</h1>
            <p>En efectivo o transferencias<br>bancarias - Citi Bank
            </p>
            <p>CBU N° 0167777100002540271111 
				CUIT:  30-71245400-4
            </p>
        </article>
        <article class="Colaboraciones">
        	<h1>Donaciones <br> Online</h1>
        
         <a href="https://donaronline.org/muy-simple/muy-simple-ensenanza-gratuita-de-oficios" target="_blank" title="Hacenos tu consulta">
       <button type="button" class="hacer-donacion overHacerDonacion">Haga su donación</button>
       </a> 
        </article>
        <article class="Colaboraciones">
        		<div class="logo_Donaciones"><img src="resources/images/logo_donaciones.png" width="58" height="58"/></div>
        	<h1>La Tienda</h1>
            <p>Comprando alguno de<br> nuestros productos estás<br> ayudando.<br>
            <a href="LaTienda.php">Visita la Tienda</a></p>
        </article>
         
        <article class="Colaboraciones">
            <a href="https://donaronline.org/muy-simple/muy-simple-ensenanza-gratuita-de-oficios" target="_blank" title="Hacenos tu consulta" style="text-decoration:none;">
        	<h1>Becas</h1>
           <p>Podés becar a un alumno con $2000 anuales o una cuota mensual de $200.</p>
           </a>
        </article>
    
        <article class="Colaboraciones" title="Puede enviar sus datos a través del formulario de Donación y Ayuda.">
        	<h1>Voluntariado</h1>
            
         <p>Los invitamos a sumarse a la Fundación, aportando sus ganas, capacidades y conocimientos. </p>
        </article>
        
         <article class="Colaboraciones" title="Puede enviar sus datos a través del formulario de Donación y Ayuda.">
        	<h1>Insumos</h1>
            
         <p>Podes colaborar como los elementos que necesitan para dictar las clases </p>
         
        </article>
        
    </section>
     <p class="PieColaboraciones SacarSeccionCelular">Desde ya agradecemos su colaboración ya que nos permite seguir adelante con nuestro propósito de capacitar y lograr la inserción laboral de personas de bajos recursos socio económicos. 
		</p>
    <!--<p class="PieColaboraciones SacarSeccionCelular DataProposito">Su donación nos permite seguir con nuestro propósito de capacitar y lograr la inserción laboral de personas de bajos recursos socioeconómicos. ¡Muchas gracias!  
		</p>-->

</section>    
    
    <img class="FlechaCompartir SacarWeb" src="resources/images/flecha.png" width="97" height="60"/>
		
 <aside class="col formulario_novedades MobileFormNovedades">
      <header class="CabezaFormulario">
    <h1>¿Querés Ayudar / Donar?</h1>
    <h2 class="SubtituloFormulario">Nos pondrémos en contacto con vos.</h2>
    
    </header>
  		<div class="formularioAyudar clearfix Col_1Mobile">
        <?php  
        require "functions/donacion.inc.php";

        if(isset($_POST['submit'])){
            Donacion();
        }

        ?>

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
  $(document).ready(function(){
    $('#other').click(function() {
    $('.datos-novedades-enable').attr('disabled',! this.checked)
    });

  });
</script>     

        <form class="seleccion" action="" method="post">
        <input type="hidden" name="fecha">
		<span>*Nombre y apellido</span>
     	<input name="nombre_apellido" type="text" class="datos-novedades QuienesSomosSatos-novedades" required>
     		<span>*Teléfono</span>
     	<input name="telefono" type="text" class="datos-novedades QuienesSomosSatos-novedades" required>	
            <span>*Email</span>
	 	<input name="email" type="text" class="datos-novedades QuienesSomosSatos-novedades" required>
        	<span>Empresa</span>
	 	<input name="empresa" type="text" class="datos-novedades QuienesSomosSatos-novedades">
 	  		<span>*Comentarios</span>
	 	<textarea name="comentario" type="text" class="datos-novedades FormComentarios QuienesSomosSatos-novedades" required></textarea>	
        
        <p><b>Tipo de ayuda / donación:</b></p>

        <p><input type="checkbox" name="check1" value="Insumos "> Insumos</p>
                               
        <p><input type="checkbox" name="check2" value="Becas "> Becas</p>          
           
        <p><input type="checkbox" name="check3" value="Voluntariado "> Voluntariado</p>
                         
        <p><input type="checkbox" name="check4" id="other" value="Otros: "> Otros</p>
             
        <p><input name="otros" type="text" class="datos-novedades-enable" disabled></p>

		<input type="submit" name="submit" class="suscribite EnviarAyuda" value="Enviar">

        </form><!-- /form -->
		</div>
    	</div>
    </aside>
        <!-- <div class="FlechaCompartir SacarSeccionCelular">Su donación nos permite...</div>-->
     
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

      </div> <!-- /aca -->
    </div>
    <div class="pagination"></div>
</section>


<section class="Equipo clearfix SacarSeccionCelular" id="PerosnasFundacion">
	<div class="row clearfix">
        <?php require "admin/class/class.integrantes.php";$x = new Integrante(); ?>


    	<h1>Quienes Integramos La Fundación</h1>
        
        <?php foreach($x->fetch() as $k => $v): 
            $telefono = (!is_null($v["telefono"]) && !empty($v["telefono"]) ? 'TEL: '.$v["telefono"] : ''  );


        ?>
    		<article class="integrantes">
            <a href="mailto:<?php echo($v["email"]) ?>"> 

                <?php if ($v["img"]!="") { ?>

            	<figure style="overflow:hidden;">
                    <div class="content-contacto">
                        <div class="SobreContacto">
                            
                        </div>
                        <p id="mailp"><?php echo($v["email"]) ?></p>
                        <p id="mailp"><?php echo($telefono) ?></p>
                    </div>
                    <img src="upload/<?php echo($v["img"]) ?> " title="<?php echo($v["nombre"])?>"/>
                </figure> 
                <?php 
                }else{ ?>
                <figure style="background-color:white;">
                    <div class="content-contacto">
                        <div class="SobreContacto"></div>
                        <p id="mailp"><?php echo($v["email"]) ?></p>
                        <p id="mailp"><?php echo($telefono) ?></p>
                    </div>
                    <img src="logo_muysimple_gris.png" width="241" height="195" title="<?php echo($v["nombre"])?>"/>
                </figure>
                <?php } ?>
            	<figcaption><?php echo($v["nombre"]);?> <?php echo($v["apellido"]); ?></figcaption>
                <p><?php echo($v["puesto"]) ?></p>
             </a>
            </article>
        <?php endforeach;?>

    		
    </div>	
</section>
<?php include("empresas-section.php") ?>
<?php include('footer.php') ?>
	
	
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
	<script type="text/javascript" src="resources/scripts/libs/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="resources/scripts/libs/idangerous.swiper.min.js"></script>
   <script type="text/javascript" src="resources/scripts/application.js"></script>
  <script>
			window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
	</script>
    <script>
    $(document).ready(function() {
      setTimeout(function(){
        $('#galeria_preloader').animate({opacity: 0}, 500,function(){
          $(this).css('z-index', -1000);
        });
      }, 1000);
    });
    </script>
</body>
</html>
