//sidebar toggle


const btnToggle = document.querySelector('.toggle-btn');

btnToggle.addEventListener('mouseover', function () {
console.log('click')
document.getElementById('sidebar').classList . toggle('active');
console.log(document.getElementById('sidebar'));




});


//submenus no funcional 
let flechita = document.getElementsByClassName('desplegar bi bi-chevron-down');
$(document).ready(function(){



$('li').click(function(e){
        e.preventDefault();

        if ($('.desplegar-cat').hasClass('bi bi-chevron-down')){
                $('.desplegar-cat').removeClass('bi bi-chevron-down');
                $('.desplegar-cat').addClass('bi bi-chevron-up');
        } else if ($('.desplegar-cat').hasClass('bi bi-chevron-up')){
                $('.desplegar-cat').removeClass('bi bi-chevron-up');
                $('.desplegar-cat').addClass('bi bi-chevron-down');
        }
});


$('#sidebar li:has(ul)').click(function(e){
        e.preventDefault();
    
    
    
        if ($(this).hasClass('activado')){
                $(this).removeClass('activado');
                $(this).children('ul').slideUp();
        
        }else {
                $('#sidebar li ul').slideUp();
                $('#sidebar li').removeClass('activado');
                $(this).addClass('activado');
                $(this).children('ul').slideDown();
        }
})});
