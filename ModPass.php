<?php

session_start();

$passwor = $_POST["txtpass"];
$rut = $_SESSION["rutx"];


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

$query = "update usuario set password='".$passwor."' where rut='".$rut."'";

$result = mysqli_query($conn, $query);

if (mysqli_query($conn, $query)) {
        
        echo "<script>alert('Modificado con exito');</script>";
    	echo "<script>window.location = 'perfil.php';</script>";
    	$_SESSION["passx"] = $row["password"];
    
} else {
    echo "<script>alert('Usuario inexistente');</script>";
    echo "<script>window.location = 'perfil.php';</script>";
    
}

mysqli_close($conn);


?>