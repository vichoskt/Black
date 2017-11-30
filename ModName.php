<?php

session_start();


$rut = $_SESSION["rutx"];

if(empty($_POST['txtname']))
{
	echo "<script>alert('Campo Vacio!');</script>";
    echo "<script>window.location = 'perfil.php';</script>";
    return false;
}  
else{
	$name = $_POST["txtname"];
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

$query = "update usuario set nombre_us='".$name."' where rut='".$rut."'";

$result = mysqli_query($conn, $query);

if (mysqli_query($conn, $query)) {

        echo "<script>alert('Modificado con exito');</script>";
    	echo "<script>window.location = 'perfil.php';</script>";
    	$_SESSION["nombrex"] = $name;
   


} else {
    echo "<script>alert('Usuario inexistente');</script>";
    echo "<script>window.location = 'perfil.php';</script>";
    
}

mysqli_close($conn);


?>