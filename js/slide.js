$(document).ready(function(){
var imgItems = $('.slider li').lenght; //numero de slides
var imgPos = 1;

//agregando mas paginacion 

for(i = 1; i <= imgItems; i++){
$('.pagination').append('<li><span class="bi bi-circle-fill"></span></li>');

}


    $('.slider li').hide(); //Ocultar slides
    $('.slider li:first').show(); //Mostrar el priimer slide
    $('.pagination li:first').css({'color':'#f07287'}); //Damos estilos al primer item de la paginacion 


    //Ejecutamos todas las funciones

    $('.pagination li').click(pagination);
    $('.flechas span').click(nextSlide);
    $('.flechas span').click(prevSlide);

    setInterval(function(){

    } , 4000);


    //Funciones

    function pagination(){
        var paginationPos = $(this).index() + 1; //Posicion de los slides
        console.log(paginationPos);

        $('.slider li').hide(); //Ocultando slides
        $('.slider li:nth-child('+ paginationPos +')').fadeIn(); //MOstrando el slide selecionado 

        //Estilo del slide selecionado

        $('.pagination li').css({'color' : '#151719'});
        $(this).css({'color' : '#f07287 '});

    }

    function nextSlide(){
       if(imgPos <= 1){imgPos = imgItems} 
       else {imgPos--;}


        $('.pagination li').css({'color': '#151719'});
        $('.pagination li:nth-child('+ imgPos +')').css({'color' : '#f07287 '});


        $('.slider li').hide(); //Ocultando slides
        $('.slider li:nth-child(+ imgPos +)').fadeIn(); //MOstrando el slide selecionado 


    }

    function prevSlide(){
        if(imgPos <= 1){imgPos = imgItems} 
        else {imgPos--;}
 
 
         $('.pagination li').css({'color': '#151719'});
         $('.pagination li:nth-child('+ imgPos +')').css({'color' : '#f07287 '});
 
 
         $('.slider li').hide(); //Ocultando slides
         $('.slider li:nth-child(+ imgPos +)').fadeIn(); //MOstrando el slide selecionado 
 
 
     }
 


});