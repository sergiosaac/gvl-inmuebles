<?php
	if(isset($_POST['agente_inmobiliario']) && isset($_POST['tel_agente_inmobiliario']) && isset($_POST['zona']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$agente_inmobiliario = $_POST['agente_inmobiliario'];
		$tel_agente_inmobiliario = $_POST['tel_agente_inmobiliario'];
		$zona = $_POST['zona'];

		$query = "INSERT INTO users(agente_inmobiliario, tel_agente_inmobiliario, zona) VALUES('$agente_inmobiliario', '$tel_agente_inmobiliario', '$zona')";
		if (!$result = mysqli_query($db,$query)) {
	        exit(mysqli_error($db));
	    }
	    echo "1 Record Added!";
	}
?>