<?php //require "resources/db.php"; ?>
<?php require_once("libs.php");
        require "functions/novedades-tienda.inc.php";
        require 'functions/novedades.inc.php'; 

        $novedades = new Novedades();
        $collection = $novedades->getAll();



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
    <title>Novedades</title>
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
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" >Compartir</div> -->


<div class="FormularioPopIn">
<div class="row Col_1Mobile">
 <aside class="FormPopin Col_1Mobile">
      <header class="PopInCabezaFormulario CabezaFormContacto">
    <h1>Suscribite a nuestras Novedades</h1>
    </header>
  		<div class="PopInformularioContacto clearfix">
            <div class="PopInText"><p>Queremos contarte nuestras novedades, cursos y proyectos.<br> Dejanos tu email para que te enviemos la información:</p>
			</div>

    <?php  
      require "functions/suscripcion.inc.php";

      if(isset($_POST['submit'])) {
      Suscripcion();
      }
      ?>
        
        <form action="" method="post">
		<div class="PopInText"><span class="MobilePopInText">*Nombre y apellido</span>
     	<input name="nombre_apellido" type="text" class="datos-novedades" ></div>
        <div class="PopInText"><span class="PopInEmail MobilePopInText">*Email</span>
	 	<input name="email" type="text" class="datos-novedades"></div>
			
		 
		<div class="PopInText"> 
		
			<input type="submit" name="submit" class="PopInSuscribite" value="Suscribite">
            </div>
        </div>

        <div class="CerrarPopIn"><a href="#"><span class="icon ImgCerrar"></span></a></div>
        
    	</div>
        </form>
    </aside>
</div>    

</div>


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
                <li ><a class="Menu marcado" href="novedades.php" title="Novedades">Novedades</a></li>
                 <li class="SacarSeccionCelular" ><a class="Menu" href="Revista.php" title="Revista">Revista</a>
                </li>
                <li ><a class="Menu" href="contacto.php" title="Contacto">Contacto</a></li>
          </ul>
        </nav>
    </div>
    <?php include_once('social.php'); ?>
</header>

<section class="CabeceraMobile SacarWeb">Novedades</section>

	<section class="site-novedades clearfix  Col_1Mobile">
    <div class="row Col_1Mobile">
    	 <section class=" col_1 EncabezadoNovedades SacarSeccionCelular">
       	<a href="Revista Digital.php"><button type="button" class="ver-novedades tienda btn-Novedades">
       	<span class="icon libroOnline"></span><span class="btn-revista">Revista Online</span>
       </button></a>
       </section>	 
       <section class="col col_1 EncabezadoNovedades  Col_1Mobile ">
        	<h1>Novedades</h1>
                <p>Queremos contarte nuestras novedades, cursos y proyectos. Dejanos tu email para que te enviemos la información</p>
    	<button type="button" class="SuscribiteNovedades" id="btn_Activa">Suscribite</button>
       </section>
    </div>
    </section>

	<section class="site-novedades_2 clearfix">
    <div class="row novedades-section">
    
    
    <?php 
      
        $i = 0;
        foreach($collection as $k => $v): 

    ?>
    <!-- Novedad -->
    <article class="notas <?php echo ($i == 3 ? 'not-margin' : ''); ?>">
        <header class="cabeza-notas">
            <aside class="fecha">
                <div class="fecha-mesDia"><?php echo $v->fecha->day."/".$v->fecha->month ?></div>
                <div class="fecha-ano"><?php echo $v->fecha->year ?></div>
            </aside>
            <h2><a href="novedades-detalle.php?id=<?php echo $v->id ?>"><?php echo $v->titulo ?></a></h2>
        </header>
        <p class="pb20"><?php echo Utils::limitText($v->detalle, 200, false) ?>...</p>
        <div>
            
            <div class="overflow">
                <?php if(file_exists("upload/".$v->img)): ?>
                <img class="logo" src="upload/<?php echo $v->img ?>">
                <?php endif; ?>
            </div>

            <div class="nota-share">
                <a href="http://www.facebook.com/sharer.php?u=http://www.muysimple.org/novedades-detalle.php?id=<?php echo $v->id ?>&amp;t=<?php echo $v->titulo ?>" target="_blank" title="Compartir en Facebook" rel="nofollow" class="fblink">
                    <span class="icon smFbBlanco"></span>
                </a> 
                <a href="https://twitter.com/intent/tweet?original_referer=http://www.muysimple.org/novedades.php&amp;text=<?php echo $v->titulo ?>&amp;tw_p=tweetbutton&amp;url=http://www.muysimple.org/novedades.php&amp;via=fmuysimple" class="twlink">
                    <span class="icon smTwBlanco"></span>
                </a>
            </div>
            <a href="novedades-detalle.php?id=<?php echo $v->id ?>"><span class="icon vineta nota-vineta"></span></a>
        </div>
    </article>

    <!-- END NOVEDAD -->
    <?php 
   
    if($i == 2):
        echo('<div style="clear:both;"></div>');
    endif;
    $i++;
    endforeach; 
    ?>

   
    	
 

    	
    </div>
    <?php 
        $paginas = $novedades->paginator();
        $novedades->next();
     ?>
    <div class="paginacion auto">
        <ul>
        <?php if($novedades->prev()): ?>
            <li><a href="?page=<?php echo $novedades->prev(); ?>" class="btn-link"> < </a></li>
        <?php 
            endif;
            for ($i=1; $i < $paginas; $i++):?>
            <li><a href="?page=<?php echo $i ?>" class="btn-link"><?php echo $i ?></a></li>
        <?php
            endfor;
            if($novedades->next()):
        ?>
            <li><a href="?page=<?php echo $novedades->next(); ?>" class="btn-link"> > </a></li>
        <?php endif; ?>

        </ul>
    </div>
    </section>
    

  <?php include('footer.php') ?>
	


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	
    <script type="text/javascript" src="resources/scripts/libs/idangerous.swiper.min.js"></script>
   <script src="resources/scripts/application.js">Compartir</script>

  <script>
			window.jQuery || document.write('<script src="resources/scripts/libs/jquery-1.10.2.min.js"><\/script>');
            // $('.fblink,.twlink').click(function(event) {
            //     event.preventDefault();
            // });
	</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</body>
</html>
