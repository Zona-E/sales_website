<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contenido.css">
    <script src="https://kit.fontawesome.com/a273e1a2f7.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="menu">
            <nav>
                <label class="logo">Zona E</label>
                <ul>
                    <li><a class="active" href="#">Inicio</a></li>
                    <li><a href="#">Categoria<span class="bi bi-chevron-down"></span></a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Informacion</a></li>
                    <li><a href="views/login.php">ACCEDER</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="user-welcome">
            <h1>Bienvenido, <?php echo $usuario->getName(); ?></h1>
        </div>

        <br><br>

        <!---COMIENZO DEL SLIDER-->
        <div class="show-slide">
            <ul class="slider">
                <li>
                    <img src="assets/media/images/slider/1.jpg" class="imgslider">
                    <section class="caption">
                        <h1>Zona E Shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquam, numquam omnis cum odio debitis.</p>
                        <a href="#" class="boton1">Continuar</a>
                    </section>

                </li>
                <li>
                    <img src="assets/media/images/slider/2.jpg" class="imgslider">
                    <section class="caption">
                        <h1>Zona E Shop 2</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquam, numquam omnis cum odio debitis.</p>
                    </section>

                </li>
                <li>
                    <img src="assets/media/images/slider/3.jpg" class="imgslider">
                    <section class="caption">
                        <h1>Zona E Shop 3</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquam, numquam omnis cum odio debitis.</p>
                    </section>
                </li>
                <li>
                    <img src="assets/media/images/slider/4.jpg" class="imgslider">
                    <section class="caption">
                        <h1>Zona E Shop 4</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquam, numquam omnis cum odio debitis.</p>
                    </section>
                </li>

            </ul>
            <ol class="pagination">

            </ol>
            <div class="left">
                <span class="fas fa-chevron-left"></span>
            </div>

            <div class="right">
                <span class="fas fa-chevron-right"></span>
            </div>
        </div>

        <br><br><br><br><br><br><br><br>


        <div class="contenido2">
            <img src="assets/media/images/tshirt2.jpg">
            <!---Meterle un border a la foto,-->
            <div class="texto">
                <p>En oferta, con 30% de Descuento,</p>
                <a href="#" class="botonC">Continuar</a>
            </div>
        </div>

        <center>
            <h1>Categorias</h1>
            <br><br>
            <div class="team">
                <div class="single">
                    <img src="assets/media/images/dondiablo2.jpg" alt="">
                    <div class="text">
                        <h2>Gorros</h2>
                        <p>Gorros de buena calidad.</p>
                        <p>
                            <br> <a href="#" class="btn">Continuar</a>
                        </p>
                    </div>
                </div>

                <div class="single">
                    <img src="assets/media/images/tshirt1.jpeg" alt="">
                    <div class="text">
                        <h2>T-shirts</h2>
                        <p>T-shirts De todo tipo.</p>
                        <p>
                            <br><a href="#" class="btn">Continuar</a>
                        </p>
                    </div>
                </div>


                <div class="single">
                    <img src="assets/media/images/sudadera1.jpg" alt="">
                    <div class="text">
                        <h2>Hooders</h2>
                        <p>Hooder De todo tipo.</p>
                        <p>
                            <br><a href="#" class="btn">Continuar</a>
                        </p>
                    </div>
                </div>
            </div>
        </center>

        <br><br><br><br><br>

        <center>
            <h1> Otros Productos.</h1>
            <!--PONER BARRA PARA DIVIDIR CATEGORIA DE PRODUCTOS-->
        </center>

        <br><br><br>

        <div class="team">
            <div class="single">
                <img src="assets/media/images/sudadera1.jpg" alt="">
                <div class="text">
                    <h2>Sudadera Don diablo</h2>
                    <p>RD$350</p>
                    <p>
                        <br><a href="#" class="btn">Continuar</a>
                    </p>
                </div>
            </div>

            <div class="single">
                <img src="assets/media/images/sudadera1.jpg" alt="">
                <div class="text">
                    <h2>T-shirt Owsla</h2>
                    <p>RD$1,300</p>
                    <p>
                        <br><a href="#" class="btn">Continuar</a>
                    </p>
                </div>
            </div>
        </div>

    </main>

    <!--FOOTER-->
    <br><br><br><br>
    <footer>

        <div class="container-all">

            <div class="container-body">
                <div class="col1">
                    <h1>Sobre nosotros</h1>

                    <p>Somos una tienda innovadora y de alta clase, que se esmera por reflejar la mejor calidad del mercado y sobrepasar las expectativas de cada uno de nuestros clientes.</p>
                </div>

                <div class="col2">
                    <h1>Redes Sociales</h1>

                    <div class="netrow">
                        <img src="assets/icons/facebook.png" alt="">
                        <label>Zona E Shop</label>
                    </div>

                    <div class="netrow">
                        <img src="assets/icons/instagram.png" alt="">
                        <label>Zona E Shop</label>
                    </div>

                    <div class="netrow">
                        <img src="assets/icons/twitter.png" alt="">
                        <label>Zona E Shop</label>
                    </div>

                    <div class="netrow">
                        <img src="assets/icons/tumblr.png" alt="">
                        <label>Zona E Shop</label>
                    </div>

                    <div class="netrow">
                        <img src="assets/icons/pinterest.png" alt="">
                        <label>Zona E Shop</label>
                    </div>

                </div>

                <div class="col3">
                    <h1>Contáctanos</h1>
                    <div class="rowinfo">
                        <img src="assets/icons/house.png" alt="">
                        <label>C/ Principal, #53, Francisco del Rosario Sánchez - Santiago, Rep. Dom.</label>
                    </div>

                    <div class="rowinfo">
                        <img src="assets/icons/smartphone.png" alt="">
                        <label>+1 849-212-2880</label>
                    </div>

                    <div class="rowinfo">
                        <img src="assets/icons/contact.png" alt="">
                        <label>zona_eshop@gmail.com</label>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-footer">
            <div class="footer">
                <div class="copyright">
                    @ 2021 Todos los Derechos Reservados | <a href="">Zona E Shop</a>
                </div>

                <div class="moreinfo">
                    <a href="">Más Información</a> | <a href="">Políticas de Privacidad</a> | <a href="">Términos y Condiciones </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/slide.js"></script>

</body>

</html>