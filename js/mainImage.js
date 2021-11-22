var images = new Array(
    ['images/sudadera1.jpg'],
    ['images/tshirt1.jpeg'],
    ['images/tshirt2.jpg'],
    ['images/dondiablo1.jpg'],
    ['images/dondiablo2.jpg']
);

var counter = 0;
 
function rotarImagenes() {
    counter++
    document.getElementById("changeimage").src = images[counter % images.length][0];
}
 
onload = function()
{
    rotarImagenes();
    setInterval(rotarImagenes,3000);
}