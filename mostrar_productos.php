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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "black";
   //creo dos array
    $dale=array();
    $dule=array();
      
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM producto";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
            //los seteo 
            $dale[] = $row["nombre_pro"];
            $dule[] = $row["precio"];

        }

    } 
    else {
        echo "0 results";
    }
    $conn->close();

?>


     


   <div class="columna1">
        <div class="barra_arriba">
            <p>Teléfono: +56982806956 | E-Mail: contactoBlack@black.cl</p>
            <ul>
                <li class="ultimo"><a href="#">Cotizar</a></li>
            </ul>
            <ul id="marginsito">
                <li><a href="registro.html">Registrate</a></li>
            </ul>
            <ul id="marginsito2">
                <li><a href="Login.html">Iniciar Sesión</a></li>
            </ul>
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
                    <li><a href="index.html" >Inicio</a></li>
                    <li><a href="nosotros.html" class="activo">Nosotros</a></li>
                    <li><a href="galeria.html">Galeria</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </div>

        </div>

    </div>
    <div class="columna33">
       <ul class="peque2">
    <?php

            //Los obtengo
           echo "<li><img src='img/b1.jpg' class='peque'> Nombre: ".$dale[0]." ........   Precio: ".$dule[0]." </li>"
       ?>    

       </ul>
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