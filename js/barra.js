//sidebar toggle


const btnToggle = document.querySelector('.toggle-btn');

btnToggle.addEventListener('click', function () {
console.log('click')
document.getElementById('sidebar').classList . toggle('active');
console.log(document.getElementById('sidebar'))




});


//submenus no funcional 

$(document).ready(function(){


    $('#sidebar li:has(ul)').click(function(e){
    e.preventDefault();
    
    
    
    if ($(this).hasClass('activado')){
       
    }else {
    
            $('#sidebar li ul').slideUp();
            $('#sidebar li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
    
    }})});