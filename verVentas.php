<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    

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
                <li class="ultimo"><a href="Administracion.php">Administracion</a></li>            
            </ul>
            <ul id="marginsito2">
                <li><a href="cerrar_session.php">Cerrar Sesión</a></li>
            </ul>
            <?php

                echo "<ul id='marginsito'>";
                echo  "<li><a href='Administracion.php'>".$nomb."</a></li>";
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
                          <li><a href="indexAdministrador.php">Inicio</a></li>
                          <li><a href="nosotrosAdmin.php">Nosotros</a></li>
                          <li><a href="galeriaAdmin.php">Galeria</a></li>
                          <li><a href="contactoAdmin.php">Contacto</a></li>
                    </ul>
            </div>

        </div>

        <div class="columna3">
            
        </div>

    <div class="verUsers">
        
        <?php

        $server = "localhost";
        $user = "root";
        $pass = "";
        $bd = "BLACK";

        // Create connection
        $conn = mysqli_connect($server, $user, $pass, $bd);

        $ids=array();
        $userRut=array();
        $idMedioPago=array();
        $valors=array();

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "select * FROM venta";

        $result = mysqli_query($conn, $query);


        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

                $ids[] = $row["idVenta"];
                $userRut[] = $row["usuario_rut"];
                $idMedioPago[] = $row["medio_pago_id_medio"];
                $valors[] = $row["valor"];  
            }
            
        } else {
            echo "<script>alert('Usuario inexistente');</script>";
            echo "<script>window.location = 'indexAdministrador.php';</script>";
        }

        mysqli_close($conn);


        ?>


        <?php

        $canti = count($ids);

        echo "<table border='2' class='tablilla'>";
        echo "<tr><td><h4>ID venta</h4></td>";
        echo "<td><h4>Rut usuario</h4></td>";
        echo "<td><h4>ID medio de pago</h4></td>";
        echo "<td><h4>Valor</h4></td></tr>";
        for ($i=0; $i < 5 ; $i++) { 
            echo "<tr><td> ".$ids[$i]." </td>";
            echo "<td> ".$userRut[$i]." </td>";
            echo "<td> ".$idMedioPago[$i]." </td>";
            echo "<td> ".$valors[$i]." </td></tr>"; 
        }
        echo "</table>";


        ?>




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