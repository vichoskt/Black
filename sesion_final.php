<script >
	 function errorS(){
        alert("La sesion ah caducado");
        window.location = "index.html"

    }

</script>
<?php
	session_start();
	$medio = $_POST["medio"];


	if(isset($_SESSION["nombrex"])){
		$_SESSION["med"] = $medio;
		echo "<script>window.location = 'final.php'</script>";
	}
	else{
		echo "<script>errorS()</script>";
	}

?>