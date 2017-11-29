<script >
	 function errorS(){
        alert("La sesion ah caducado");
        window.location = "index.html"

    }

</script>
<?php
	session_start();
	if(isset($_SESSION["nombrex"])){
		
		echo "<script>window.location = 'index2.php'</script>";
	}
	else{
		echo "<script>errorS()</script>";
	}
	



?>