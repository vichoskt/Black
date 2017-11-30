
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "black";
    session_start();

   //creo dos array
    $dale=array();
    $dule=array();
      


     if (isset($_SESSION["pro"])) {
         # code...
     
        $abc1 = $_SESSION["pro"];
        $abc2 = $_SESSION["rutx"];
        $abc3 = null;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $query = "insert into carrito values (  '".$abc3."' ,'".$abc2."', ".$abc1.")";

if (mysqli_query($conn, $query)) {

    echo "<script>alert('Registrado correctamente');</script>";
    echo "<script>window.location = 'Login.html';</script>";

}    else {
        echo "0 results";
    }
    $conn->close();

}
else{
    echo "nel";
}



