<?php

$rut = $_POST["txtRut"];
$password = $_POST["pass"];

$server = "localhost";
$user = "root";
$pass = "";
$bd = "BLACK";


// Create connection
$conn = mysqli_connect($server, $user, $pass, $bd);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select nombre FROM usuario WHERE rut='".$rut."' and password='".$password."'";

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<script>alert('vixo qlo. Bienvenido: ".$row["nombre"]."');</script>";
    	echo "<script>window.location = 'index2.html';</script>";
    }
} else {
    echo "<script>alert('Usuario inexistente');</script>";
    echo "<script>window.location = 'Login.html';</script>";
}

mysqli_close($conn);


?>
