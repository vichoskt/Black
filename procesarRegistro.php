<?php


if(empty($_POST['txtRut'] && $_POST["txtNombre"] && $_POST["txtApellido"] && $_POST["contra"]))
{
	echo "<script>alert('Hay campos vacios que debe completar');</script>";
    echo "<script>window.location = 'registro.html';</script>";
    return false;
}  
else{
	$rut = $_POST["txtRut"];
	$nombre = $_POST["txtNombre"];
	$apellido = $_POST["txtApellido"];
	$password = $_POST["contra"];
}

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

$query = "insert into usuario values ('".$rut."','".$nombre."','".$apellido."','".$password."')";

if (mysqli_query($conn, $query)) {
	echo "<script>alert('Registrado correctamente');</script>";
    echo "<script>window.location = 'Login.html';</script>";
}
else{
	echo "Error: ".mysqli_error($conn);
}

mysqli_close($conn);


?>