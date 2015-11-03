$(document).ready(function(){
	//descomentar cualquiera de las siguientes dos lineas, para que el
	//carrusel se desplace automaticamente cada 3000 milisegundos (3 segundos)
	//setInterval("$('#divIzquierda').click()",3000);
	//setInterval("$('#divDerecha').click()",3000);
	
	//evento clic de la flecha izquierda
	$('.divIzquierda').click(function(){
		//tomamos el ultimo elemento de la lista y lo colocamos en la ultima posicion
		// $(this).find('ul').
		// $(this).find('ul').prepend($('.divCentro ul li:last'));
		$(this).parent().children('.divCentro').children('ul').prepend($(this).parent().children('.divCentro').children('ul').children('li:last'));

	});
	
	//evento clic de la flecha derecha
	$('.divDerecha').click(function(){
		//tomamos el primer elemento de la lista y lo trasladamos a la primera posicion
		// $(this).find('ul').append($('.divCentro ul li:first'));
		$(this).parent().children('.divCentro').children('ul').prepend($(this).parent().children('.divCentro').children('ul').children('li:last'));
		// console.log($(this).parent().children('.divCentro'));
		
	});
});