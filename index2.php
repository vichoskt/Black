<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <title>Document</title>
    <script>
    function errorS(){
        alert("La sesion ah caducado");
        window.location = "index.html"

    }
    </script>

</head>
<body>

       <?php
    session_start();
    $nomb = $_SESSION["nombrex"]

    ?>


    <div class="columna1">
        <div class="barra_arriba">
            <p>Teléfono: +56982806956 | E-Mail: contactoBlack@black.cl</p>
            <ul>
                <li class="ultimo"><a href="#">Cotizar</a></li>
            </ul>
          
            <ul id="marginsito2">
                <li><a href="cerrar_session.php">Cerrar session</a></li>
            </ul>
             <?php

            echo "<ul id='marginsito'>";
             echo  "<li><a href='#'>".$nomb."</a></li>";
            echo "</ul>";
     ?>

        </div>
    </div>
    <div class="columna2">
        <div id="cabezera">
            <div id="logo">
                <h1>B L A C K</h1>
                <p>Diseños Juveniles</p>
            </div>

            <div id="menu">
                    <ul>
                          <li><a href="index.html" class="activo">Inicio</a></li>
                          <li><a href="sesion_nos2.php">Nosotros</a></li>
                          <li><a href="galeria.html">Galeria</a></li>
                          <li><a href="contacto.html">Contacto</a></li>
                        </ul>
                      </div>

        </div>

    </div>
    <div class="columna3">
        <ul>
            <li><div id="img1" class="img_portada circle"></div>
                <a href="" class="enlace">Floreado Black</a>
            </li>
            <li id="white"><div id="img2" class="img_portada"></div>
                <a href="" class="enlace">Floreado White</a>
            </li>
            <li id="primaveral"><div id="img3" class="img_portada"></div>
                <a href="" class="enlace">Floreado Primaveral</a>
            </li>
            <li id="bluex"><div id="img4" class="img_portada"></div>
                <a href="" class="enlace">Floreado Blue</a>
            </li>
        </ul>
    </div>
    <div class="columna4">
            <hr>
                
        <div id="contenedor_abajo_iz">
            <h2>Bienvenidos a Black Ropa</h2>
            <hr>
            <strong>Black ropa</strong>
            <div id="img_logo"></div>
            <p class="justificado">Diseños juveniles que estan marcando tendencia, black busca que sus compradores puedan sentirse mas seguros con una nueva e inovadora tenida primaveral. Se busca seguir con nuevos diseños</p>
            <a href="#">Leer mas...</a>
            <p class="justificado">La gente busca diseños innvoadores, algo nuevo en sus vidas y Black ha estado consiguiendo mucho con sus estilos originales </p>
            <a href="#">Leer mas...</a>
            <p class="justificado">La nueva moda se esta haciendo presente, por lo cual se busca seguir con diseños exclusivos para jovenes que buscan algo distinto con un toque de frescura </p>
            <a href="#">Leer mas...</a>
            <p class="justificado">La gente esta dejando de lado sus antiguas prendas para empezar a cambiar el closet, Black esta dando muchos caminos a gente indecisa que no sabe que adquirir esta temporada</p>
        </div>

        <div class="contenedor_abajo_de">
            <h2>Entrevistas Black</h2>
            <hr>
            <div id="img_referencia"></div>
            <strong>Referencias</strong>
            <p class="justificado">Aqui algunas opniones de nuestros compradores de poleras Black, te invitamos a que conozcas las distintas opiniones y puntuaciones de gente que ha comprado nuestros diseños </p>
            <a href="#">Leer mas...</a>
            <hr>
        </div>

    </div>
    <div class="columna5">
        <div id="contenedor_abajo_abajo">
            <div id="leftbox">
                <h2>Dato</h2>
                <p class="justificado">Cualquier duda, consulta o reclamo puede enviarnos un correo en esta sección, adjuntelo en el recuadro de abajo para que nos pongamos en contacto con usted lo antes posible.</p>
                <form action="#" method="POST">
                    <input type="text" placeholder="Su correo...">>
                    <input type="submit" value="GO">
                </form>
                <p>
                    Para subscribirse
                    <a href="#">Click aqui</a>
                </p>
            </div>
            <div class="box primero" >
                <h2>Información</h2>
                <ul>
                    <li><a href="#">Condiciones</a></li>
                    <li><a href="#">Deporte</a></li>
                    <li><a href="#">Celular</a></li>
                    <li><a href="#">Anuncios</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </div>
            <div class="box segundo">
                <h2>Comunidad</h2>
                <ul>
                    <li><a href="#">Grupos</a></li>
                    <li><a href="#">Moments</a></li>
                    <li><a href="#">Ayuda</a></li>
                    <li><a href="#">Anuncios</a></li>
                    <li><a href="#">Lugares</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>Usuario</h2>
                <ul>
                    <li><a href="#">Registrate</a></li>
                    <li><a href="#">Iniciar sesión</a></li>
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Terminos</a></li>
                    <li><a href="#">Enokei</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="columna6">
        <div id="contenedor_copy">
            <p class="float_left">
                Copyright © 2017 - Todos los derechos reservados - Black Ropa
            </p>
            <p class="float_right ropaa">
                Desarrollado por Black Ropa
            </p>
        </div>

    </div>

</body>
</html>