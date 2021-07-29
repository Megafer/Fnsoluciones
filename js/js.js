//<!-- script para que funcione al 100% el bot�n ir arriba -->//

//invocamos al objeto (window) y a su m�todo (scroll), solo se ejecutara si el usuario hace scroll en la p�gina
$(window).scroll(function(){
  if($(this).scrollTop() > 300){ //condici�n a cumplirse cuando el usuario aya bajado 301px a m�s.
    $("#js_up").slideDown(300); //se muestra el bot�n en 300 mili segundos
  }else{ // si no
    $("#js_up").slideUp(300); //se oculta el bot�n en 300 mili segundos
  }
});

//creamos una funci�n accediendo a la etiqueta i en su evento click
$("#js_up i").on('click', 'touchstart', function (e) { 
  e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
  $("body,html").animate({ // aplicamos la funci�n animate a los tags body y html
    scrollTop: 0 //al colocar el valor 0 a scrollTop me volver� a la parte inicial de la p�gina
  },700); //el valor 700 indica que lo ara en 700 mili segundos
  return false; //rompe el bucle
});
