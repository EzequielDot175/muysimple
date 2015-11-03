/*BOTONERA MOBILE*/    
	
	$(function() {

        var btn_movil = $('#nav-mobile'),
            menu =$('.site-nav').find('.BotoneraMenu');

        // Al dar click agregar/quitar clases que permiten el despliegue del menú
        btn_movil.on('click', function (e) {
            e.preventDefault();

            var el = $(this);

            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        })

    });
	
	
	/*$(function() {

        var btn_movil2 = $('.LaFundacionMobile > a'),
            menu2 =$('.site-nav').find('.SubBotones');
			

        // Al dar click agregar/quitar clases que permiten el despliegue del menú
        btn_movil2.on('click', function (e) {
            e.preventDefault();

            var el = $(this);

            el.toggleClass('nav-active');
            menu2.toggleClass('open-Submenu');
        })

    });
	
	$(function() {

        var btn_movil3 = $('.EmprendimientosMobile > a'),
            menu3 =$('.site-nav').find('.EmprendimientosSubBotones');

        // Al dar click agregar/quitar clases que permiten el despliegue del menú
        btn_movil3.on('click', function (e) {
            e.preventDefault();

            var el = $(this);

            el.toggleClass('nav-active');
            menu3.toggleClass('open-Submenu');
        })

    });
	*/






$(document).ready(function(){
    function efecto(){
		
		$(".FormularioPopIn").toggleClass("ActivarFormularioPopIn");
	

	}    
    
	
	
	var $hash = window.location.hash;
	if( $hash ){
		$( window ).scrollTop( 0 );
		$('html, body').animate({
			scrollTop: $( $hash ).offset().top 
		}, 1200);
	}
	$( 'a[href*="#"]' ).on( 'click', function(e) {
		var $attr = $( this ).attr( 'href' ),
			$hash = $attr.split( '#' );
		$hash = "#"+$hash[1];
		if( window.location.href.indexOf( $attr ) ){			
			$('html, body').animate({
				scrollTop: $( $hash ).offset().top 
			}, 1200);
		}else{
			window.top.location = $attr;
		}
	});

	
	
	$("#btn_Activa").click(efecto);
	/*
	if(location.hash=="#ContieneQuienesSomos"){
		$( window ).scrollTop(0);
		$('html, body').animate({
			scrollTop: $("#ContieneQuienesSomos").offset().top 
		}, 800);
	}
	if(location.hash=="#SeccionComoAyudar"){
		$('html, body').animate({
			scrollTop: $("#SeccionComoAyudar").offset().top 
		}, 1000);
	}
	if(location.hash=="#PerosnasFundacion"){
		$('html, body').animate({
			scrollTop: $("#PerosnasFundacion").offset().top 
		}, 1200);
	}
	if(location.hash=="#EscuelaCostura"){
		$('html, body').animate({
			scrollTop: $("#EscuelaCostura").offset().top 
		}, 1200);
	}*/
});

$(document).ready(function(){
    function efecto(){
		
	$(".FormularioPopIn").toggleClass("ActivarFormularioPopIn");
	

	}    
    
	$(".CerrarPopIn").click(efecto);

});








/*IMAGEN DE SUSTITUCION EMPRESAS ASOCIADAS*/
(function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
})();


function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
 
 
 
//SLIDER PRINCIPAL  
var mySwiper = new Swiper('.swiper-container',{
	loop:true,
	speed: 600,
	autoplay: 3000
});
$('.arrow-left').on('click', function(e){
	e.preventDefault()
	mySwiper.swipePrev()
});
$('.arrow-right').on('click', function(e){
	e.preventDefault()
	mySwiper.swipeNext()
});
 
  
//SLIDER TESTIMONIO
  var mySwiper2 = new Swiper('.Testimonioswiper-container',{
    pagination2: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  });
  $('.arrow-left2').on('click', function(e){
    e.preventDefault()
    mySwiper2.swipePrev()
  })
  $('.arrow-right2').on('click', function(e){
    e.preventDefault()
    mySwiper2.swipeNext()
  }) 
   
  
var mySwiper3 = new Swiper('.Galeriaswiper-container',{
    pagination: '.pagination',
    paginationClickable: true,
    slidesPerView: 'auto'
  })
  $('.arrow-left3').on('click', function(e){
    e.preventDefault()
    mySwiper3.swipePrev()
  })
  $('.arrow-right3').on('click', function(e){
    e.preventDefault()
    mySwiper3.swipeNext()
  })   
  
  
 var mySwiper4 = new Swiper('.SegundaGaleriaswiper-container',{
    pagination: '.pagination',
    paginationClickable: true,
    slidesPerView: 'auto'
  })
  $('.arrow-left4').on('click', function(e){
    e.preventDefault()
    mySwiper4.swipePrev()
  })
  $('.arrow-right4').on('click', function(e){
    e.preventDefault()
    mySwiper4.swipeNext()
  })   
   
  
   
  



  