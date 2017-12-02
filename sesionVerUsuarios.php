<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "BLACK";
 session_start();

// Create connection
$conn = mysqli_connect($server, $user, $pass, $bd);

$ruts=array();
$nombress=array();
$apellidoss=array();
$paswordss=array();

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * FROM usuario";

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<script>window.location = 'verUsuarios.php';</script>";
        $ruts[] = $row["rut"];
        $nombress[] = $row["nombre_us"];
        $apellidoss[] = $row["apellido"];
        $paswordss[] = $row["password"];  
    }
    
} else {
    echo "<script>alert('Usuario inexistente');</script>";
    echo "<script>window.location = 'indexAdministrador.php';</script>";
}

mysqli_close($conn);


?>
