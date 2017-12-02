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
                <li class="ultimo"><a href="sesion_carr2.php">¡Carrito!</a></li>
            </ul>
          
            <ul id="marginsito2">
                <li><a href="cerrar_session.php">Cerrar Sesión</a></li>
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
                          <li><a href="sesion_con2.php" class="activo">Contacto</a></li>
                        </ul>
                      </div>

        </div>

    </div>
    <div class="contenedor_contacto">
        <form action="#" method="POST">
            <table>
                <tr>
                    <td><input type="text" value placeholder="*Primer Nombre" maxlength="50" class="texto_contacto"></td>
                    <td><input type="text" value placeholder="*Segundo Nombre" maxlength="50" class="texto_contacto"></td>
                </tr>
                <tr>
                    <td><input type="text" value placeholder="*Correo electrónico" maxlength="70" class="texto_contacto"></td>
                    <td><select name="paises" id="pais" class="texto_contacto">
                            <option selected value="1">Chile</option>
                            <option value="2">Argentina</option>
                            <option value="3">Perú</option>
                            <option value="4">Brasil</option>
                            <option value="5">Bolivia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" value placeholder="*Ciudad" maxlength="50" class="texto_contacto"></td>
                    <td><input type="text" value placeholder="*Numero de telefono" maxlength="20" class="texto_contacto"></td>
                </tr>
                <tr>
                    <td><input type="text" value placeholder="*Mensaje" maxlength="500" class="texto_mensaje"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Enviar" id="boton_enviar"></td>
                </tr>

            </table>
        </form>

        <div id="ubicacion" class="float_right">
            <p>Celular: +56982806956
               Telefono fijo: 22 7379445
           </p>
        </div>

            <h2>Otros medios de contacto</h2>
            <div class="contenedor_iconos">
                <a href="https://www.facebook.com/black.ropa/"><div id="icono_fb" class="iconos"></div></a>
                <a href="https://www.instagram.com/vichoskt/"> <div id="icono_insta" class="iconos"></div></a>
                <div id="icono_twitter" class="iconos"></div>
                <a href="https://www.youtube.com/user/tamiiistar"><div id="icono_youtube" class="iconos"></div></a>
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