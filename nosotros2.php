<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <title>Document</title>
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
                <li class="ultimo"><a href="Productos.php">¡Carrito!</a></li>           
            </ul>
            <ul id="marginsito2">
                <li><a href="cerrar_session.php">Cerrar session</a></li>
            </ul>
            <?php

            echo "<ul id='marginsito'>";
             echo  "<li><a href='perfil.php'>".$nomb."</a></li>";
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
                    <li><a href="sesion_ind2.php" >Inicio</a></li>
                    <li><a href="sesion_nos2.php" class="activo">Nosotros</a></li>
                    <li><a href="sesion_gale2.php">Galeria</a></li>
                    <li><a href="sesion_con2.php">Contacto</a></li>
                </ul>
            </div>
		</div>
    </div>
    <div class="contenedor_max_nosotros">
        <div class="contenedor_nosotros">
            <div class="foto_nosotros" id="cambio_foto"></div>
            <div class="contenedor_der_nosotros">
                <h2>Quienes somos</h2>
                <p class="estiloP2">Black una marca de poleras independiente, que esta enfocada principalmente el publico juvenil, haciendo diseños de interes y tendencia popular para jóvenes. A nosotros como marca nos gusta dar la mejor atencióna nuestros clientes por ello ya contamos con mas de 200 compradores fieles a nuestra marca, y se espera que esta cifra siga subiendo en el futuro para empezar a extendernos nacionalmente. Hace ya 2 años que entramos al mercado de las poleras para seguir proximamente con polerones.</p>
                </div>
                <p class="estiloP1"></p>
                <p class="estiloP2">Black esta inspirado en tendencias al estilo Skater, dado que a estos deportistas tienen una temática de libertad sobre su patienta esta representado en los diseños floreados, representando en grado la libertad que se puede obtener el estar arriba de una tabla. También asi los distintos deportes que provoquen una sensación de frescura y alegria ya sea como lo es el Fútbol, Surf, Snowboard, etc.</p>

                <p class="estiloP3">
                    LOCALIZACIÓN
                </p>
                <p class="estiloP3">La sucursal física está situada en Independencia, en la calle San luis, Pasaje 1491, casa 18</p>
                <p class="estiloP3">El teléfono de la sucursal es el siguiente: +569 82806956</p>

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