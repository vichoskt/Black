<?php

$check = $_POST['cajita'];

?>
<script >
	 function errorS(){
        alert("La sesion ah caducado");
        window.location = "index.html"

    }

</script>
<?php
	session_start();
	if(isset($_SESSION["nombrex"])){
		
		$_SESSION["pro"] = $check;
		echo "<script>window.location = 'Carrito.php'</script>";
	}
	else{
		echo "<script>errorS()</script>";
	}
	



?>