<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "black";
    session_start();

   //creo tres array
    $dale=array();
    $dule=array();
    $dele=array(); 
  
        $abc2 = $_SESSION["rutx"];
        $abc3 = null;

if (isset($_SESSION["pro"])) {
             # code...
        $abc1 = $_SESSION["pro"];
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $query = "insert into carrito values (  '".$abc3."' ,'".$abc2."', ".$abc1.")";

    if (mysqli_query($conn, $query)) {

        echo "<script>alert('Registrado correctamente');</script>";
      
        }else {
            echo "0 results";
        }

        $conn->close();
        unset($_SESSION["pro"]);

}

?>






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
    //obtener los productos asociados al carrito

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "black";
   //creo dos array

      
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT producto_idproducto FROM carrito WHERE usuario_rut='".$abc2."' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
            //los seteo 
            $dale[] = $row["producto_idproducto"];

        }

    } 
    else {
        echo "0 results";
    }
    $conn->close();

?>


<?php
 //Obtener datos de el carrito
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "black";
   //creo dos array

     $cant = count($dale);
      
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    for ($i=0; $i < $cant ; $i++) { 
        # code...
    
    $sql = "SELECT * FROM producto WHERE idproducto='".$dale[$i]."' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
            //los seteo 
            $dule[] = $row["nombre_pro"];
            $dele[] = $row["precio"];
        }

    } 
    else {
        echo "0 results";
    }
}
    $conn->close();


?>




      <?php
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
    for ($i=0; $i < $cant ; $i++) { 
         
          
    echo "<h3>Producto: ".$dule[$i]."</h3>";
    echo "<h3 >Precio: $".$dele[$i]." </h3>";
        

    }

 $exter=0;

for ($i=0; $i <$cant ; $i++) { 
    # code...

$exter= $exter + $dele[$i];
  
}
 
 $_SESSION["valorcito"] = $exter;

    echo  "<ul class='peque3'>";       
    echo "<li class='peque3'><h2>  Valor total a pagar: $".$exter."  </h2>   </li>";
    echo "</ul>";


    ?>
    <br>
<form action="sesion_comp.php">
<input type="submit" value="Comprar" class="botondalex">
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

