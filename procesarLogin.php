<?php

$rut = $_POST["txtRut"];
$password = $_POST["pass"];

$server = "localhost";
$user = "root";
$pass = "";
$bd = "BLACK";
 session_start();

// Create connection
$conn = mysqli_connect($server, $user, $pass, $bd);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select nombre_us FROM usuario WHERE rut='".$rut."' and password='".$password."'";

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<script>alert('Bienvenido: ".$row["nombre_us"]."');</script>";
    	echo "<script>window.location = 'index2.php';</script>";
    	$_SESSION["nombrex"] = $row["nombre_us"];
    }
    
} else {
    echo "<script>alert('Usuario inexistente');</script>";
    echo "<script>window.location = 'sesion_ind2.php';</script>";
}

mysqli_close($conn);


?>
