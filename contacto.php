<?php require "resources/db.php";
  require_once('admin/class/Facade.php');
  require_once('admin/class/db.query.constants.php');
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
    <title>Contacto</title>
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
<header class="site-header clearfix">
	<div class="row Col_2Mobile site-contacto">
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
                <li class="btnTiendaCelular"><a class="SelectorDistintoHover Anular" href="LaTienda.php" title="La Tienda"><span class="SelectorNegroHover Anular">La Tienda</span></a></li>
                <li ><a class="Menu" href="novedades.php" title="Novedades">Novedades</a></li>
                 <li class="SacarSeccionCelular" ><a class="Menu" href="Revista.php" title="Revista">Revista</a>
                 <ul class="EmprendimientosSubBotones SacarSeccionCelular">
                <li><a class="SubMenu" href="Revista Digital.php" title="Revista Online">Revista Online</a></li>
                </ul>
                </li>
                <li ><a class="Menu marcado" href="contacto.php" title="Contacto">Contacto</a></li>
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
<section class="ContactoLocalizacion">
<div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1643.1571951344208!2d-58.473180382027!3d-34.54559444670939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6981666195d%3A0x7213da2a920035bf!2sAv+Ruiz+Huidobro+2570%2C+Buenos+Aires%2C+Ciudad+Aut%C3%B3noma+de+Buenos+Aires!5e0!3m2!1ses!2sar!4v1424457475728" width="100%" height="460" frameborder="0" style="border:0"></iframe></div>
</section>


<section class="HojaContacto clearfix" id="HojaDeConsultas">
	<div class="row">
    <header class="CabezaHojaContactanos clearfix">
    <h1>Contactanos</h1>
    <div class="social-media MediaContacto">
        <p>Visitanos en</p>
        <a href="#" title="Compartir en Facebook" rel="nofollow" class="fblink">
            <span class="icon smFbBlanco"></span>
        </a>
        <a href="#" title="Compartir en Twitter" rel="nofollow" class="twlink">
            <span class="icon smYtBlanco"></span>
        </a>
    	</div>
    </header>
     


     <aside class="col formulario_novedades">


      <header class="CabezaFormulario CabezaFormContacto">
    <h1>Hacenos tu consulta!</h1>
    <h2 class="SubtituloFormulario">Nos pondrémos en contacto.</h2>
    </header>

    <form action="functions/send.php" method="post" id="form1">

  		<div class="formularioContacto clearfix site-Contacto">
			<span>*Nombre y apellido</span>
     	<input name="nombre_apellido" type="text" class="datos-novedades">
     		<span>*Teléfono</span>
     	<input name="telefono" type="text" class="datos-novedades">	
            <span>*Email</span>
	 	<input name="email" type="text" class="datos-novedades">
        	<span>*Empresa</span>
	 	<input name="empresa" type="text" class="datos-novedades">
 	  		<span>*Comentarios</span>
	 	<textarea name="comentario" type="text" class="datos-novedades FormComentarios"></textarea>	
          <!--   <span>*Datos requeridos</span>
			<span class="Type-code capcha">Escriba el codigo que se lee</span>	
		<input name="" type="text" class="introducir-codigo capcha" >
		 
		<button type="button" class="refresh"><span class="icon ImagenRefresh"></span></button> 
		<img class="codigo" src="resources/images/codigo.jpg" width="256" height="74" /> -->
		<input type="submit" class="suscribite EnviarContacto btn-FormContacto" value="Enviar">
    	</div>

        </form><!-- /form -->
    </aside>

    
    
     <section class="ContactoUbicacion col_1 col clearfix">
     <span class="icon MarcadorMapaVerdeClaro"></span>
     	<div class="dataContacto">
    	<h1>Ubicación</h1>
    	<p>Ciudad Autónoma de Buenos Aires - Argentina<br>Ruiz Huidobro 2570</p>
    		<button type="button" class="suscribite ComoLLegar ContactoLLegar">
        		Como llegar!
   			 </button> 
         </div>
   		<div class="dataContacto">
    	<p><span>Líneas de Colectivos</span><br>
    	15, 19, 21, 28, 38, 59, 60, 68, 71, 117, 133, 151, 152, 168, 184, 194, 203 228A, 228B, 228D, 228E, 228F, 314, 365.</p>
        </div>
   		<!-- <div class="dataContacto">
    	<p><span>Líneas de Subte</span><br>
    	Linea D<span class="FlechaNumero"> ›</span> Estación Ministro Carranza</p>
         </div> -->
         <div class="dataContacto">
    	<p><span>Líneas de Tren</span><br>
        Estación Aristóbulo del Valle del Ferrocarril General Belgrano (Norte) <br>
        Estación Rivadavia correspondiente al Ramal "Retiro-Tigre" del Ferrocarril General Bartolomé Mitre</p>
         </div>
      	<div class="dataContacto">
        
            <span class="icon ImagenMailVerde"></span>
			<div class="dataContacto">	
                <span>Email</span>
                <p><a href="#" title="milto:tienda@muysimple.org" class="Mail-site-Contacto">info@muysimple.org</a></p>
			</div>
			 <span class="icon ImagenTelefonoVerde"></span>
          <div class="dataContacto">
            <span class="telefono-titulo">Teléfonos Útiles</span>
                <p><span class="FlechaNumero">›</span>(+54) 3970-7880  </p>
           </div>
    </section>
    
<aside class="col_1 col" id="comoNosConosiste">
       <div>
       
       <header class="cabeza-comoNosConosiste">
       
       </header>
       			 <h1>¿Cómo nos conocisite?</h1>

        <?php  
        require "functions/encuestas.inc.php";


        if(isset($_POST['submit2'])) {
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
        
         <form class="seleccion" name="form1" method="post" action="" >
             
            <input type="radio" name="option" id="radio1" class="radio" value="Sitio Web" style="display:none"/ checked>
        		<label for="radio1">Sitio web</label>
       
        	<input type="radio" name="option" id="radio2" class="radio" value="Tienda" style="display:none" />
            <label for="radio2">Tienda</label>
             
            <input type="radio" name="option" id="radio3" class="radio" value="Revista" style="display:none"/>
                 <label for="radio3"> Revista</label>
                 
            
            <input type="radio" name="option" id="radio4" class="radio" value="Facebook" style="display:none">
                 <label for="radio4">Facebook</label>
                 
               
             <input type="radio" name="option" id="radio5" class="radio" value="Avisos en via pública" style="display:none">
                 <label for="radio5">Avisos en vía pública</label>
            
           
            <input type="radio" name="option" id="radio6" class="radio" value="Youtube" style="display:none">
                <label for="radio6"> YouTube</label>
             
             
            <input type="radio" id="radio7" name="option" class="radio" style="display:none">
                <label for="radio7">  Otros (Por favor especifique)</label>
             
            
            <p><input name="otros" type="text" class="EspecificarCampo"></p>
         
         
         <input type="submit" name="submit2" class="suscribite enviarConocer" value="Enviar">

       </form>

    </div>
     </aside>
    
    <div class="col_1 col CirculosContactos">
			<div class="circulo"><a href="capacitacion.php"><div class="circulo-interno"><p class="Capacitarme">Capacitarme</p></div></a></div>
			<div class="circulo"><a href="QuienesSomos.php#SeccionComoAyudar"><div class="circulo-interno"><p class="ayuda">Ayudar</p></div></a></div>
	</div>
    
    	<h1 class="pieTitulo col">Trabajamos para que otros puedan trabajar. </h1>
    </div>
</section>
<?php include("empresas-section.php") ?>

<!--<section class="EmpresasAsociadas clearfix"> 
<header class="cabeza-revista"></header>
     <div class="row">
      
     <h1>Trabajamos junto a :</h1>
     	
        <div class="HoverLogosEmpresas"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image22','','resources/images/FundacionOficios_Color.jpg',1)"><img src="resources/images/FundacionOficios.jpg" width="172" height="97" id="Image22"></a></div>
     	<div class="HoverLogosEmpresas"><img src="resources/images/MuseoDelTraje.jpg" width="112" height="97"/></div>
        <div class="HoverLogosEmpresas"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image23','','resources/images/FinanzasColor.jpg',1)"><img src="resources/images/Finanzas.jpg" width="175" height="97" id="Image23"></a></div>
        <div class="HoverLogosEmpresas"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image24','','resources/images/ProjectColor.jpg',1)"><img src="resources/images/Project.jpg" width="222" height="97" id="Image24"></a></div>
     	<div class="HoverLogosEmpresas"><img src="resources/images/accenture.jpg" width="183" height="97"/></div>
    
	<aside class="ListaEmpresas">
    <ul>
    <li> Asociación civíl la carolina</li>
    <li></li>
    <li> Santuario San Cayetano</li>
    <li></li>
    <li> Ecos Sociales</li>
    </ul>
    
	 </div>
</section>-->

<?php include('footer.php') ?>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
			window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
	</script>
	<script src="resources/scripts/application.js"></script>
  <script>
  jQuery(document).ready(function($) {
    $('#form1').submit(function(event) {
        var values = $(this).serializeArray();

        var error = 0;
        $.each(values, function(index, val) {
          if (val.value == "") {
            event.preventDefault();
            error++;
          };
        });

        console.info('Reporting :', error);
        if (error > 0) {
          alert('Por favor, complete los campos obligatorios');
        };
    });
  });
  </script>
</body>
</html>
