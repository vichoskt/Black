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
                <li class="ultimo"><a href="sesion_carr2.php">¡Carrito!</a></li>            
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
                          <li><a href="sesion_ind2.php">Inicio</a></li>
                          <li><a href="sesion_nos2.php">Nosotros</a></li>
                          <li><a href="sesion_gale2.php">Galeria</a></li>
                          <li><a href="sesion_con2.php">Contacto</a></li>
                    </ul>
            </div>

        </div>

    </div>

		    <div class="columna33">
            
            <?php

            $run = $_SESSION["rutx"];
            $nom = $_SESSION["nombrex"];
            $app = $_SESSION["apellidox"];
            $valor = $_SESSION["valorcito"];


            echo "<h2> Rut: "  .$run." </h2> ";
            echo "<br>";


            echo "<h2> Nombre: "  .$nom." </h2> ";
            echo "<br>"; 
            

            echo "<h2> Apellido: "  .$app." </h2> ";
            echo "<br>"; 

            echo "<h2> Precio Total: $"  .$valor." </h2> ";
            echo "<br>"; 

            ?>
            
            <form action="sesion_final.php" method="POST">
                
            Medio de pago: <br>
            <select name="medio" id="mede" class="texto_contacto">
                            <option selected value="1">Débito</option>
                            <option value="2">Crédito</option>
                           
                        </select>
                
                <input type="submit" value="Confirmar" class="botondalex">
            </form>
        
            



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