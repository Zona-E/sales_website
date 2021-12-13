$(document).ready(function(){
    var imgItems = $('.slider li').length; //numero de slides
    var imgPos = 1;

    //agregando mas paginacion 
    for(let i = 1; i <= imgItems; i++){
        $('.pagination').append('<li><i class="fas fa-circle"></i></li>');
    }       


    $('.slider li').hide(); //Ocultar slides
    $('.slider li:first').show(); //Mostrar el priimer slide
    $('.pagination li:first').css({'color':'#f07287'}); //Damos estilos al primer item de la paginacion 

    //  Ejecutar todas las funciones
    $('.pagination li').click(pagination);
    $('.right span').click(nextSlide);
    $('.left span').click(prevSlide);


    setInterval(() => {
        nextSlide();
    }, 4000);

    // FUNCIONES

    function pagination () {
        let paginPos = $(this).index() + 1; //posicion de paginacion seleccionada
        
        $('.slider li').hide(); //se ocultan todos los slides
        $('.slider li:nth-child('+ paginPos  +')').fadeIn(); //mostramos el slide seleccionado

        //estilos a la paginacion seleccionada
        $('.pagination li').css({'color':'#151719'});
        $(this).css({'color':'#f07287'});

        imgPos = paginPos;

    }

    function nextSlide () { 
        if (imgPos >= imgItems){
            imgPos = 1;
        } else {
            imgPos++;
        }
        
        $('.pagination li').css({'color':'#151719'});
        $('.pagination li:nth-child('+imgPos+')').css({'color':'#f07287'});


        $('.slider li').hide(); //se ocultan todos los slides
        $('.slider li:nth-child('+imgPos+')').fadeIn(); //mostramos el slide seleccionado
    }  



    function prevSlide () { 
        if (imgPos <= 1){
            imgPos = imgItems; 
        } else {
            imgPos--;
        }
        
        $('.pagination li').css({'color':'#151719'});
        $('.pagination li:nth-child('+imgPos+')').css({'color':'#f07287'});


        $('.slider li').hide(); //se ocultan todos los slides
        $('.slider li:nth-child('+imgPos+')').fadeIn(); //mostramos el slide seleccionado
    }  



});