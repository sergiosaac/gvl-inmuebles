<?php
	if(isset($_POST['agente_inmobiliario']) && isset($_POST['tel_agente_inmobiliario']) && isset($_POST['zona']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$agente_inmobiliario = $_POST['agente_inmobiliario'];
		$tel_agente_inmobiliario = $_POST['tel_agente_inmobiliario'];
		$zona = $_POST['zona'];
		$barrio = $_POST['barrio'];
		$direccion = $_POST['direccion'];
		$precio_para_alquilar = $_POST['precio_para_alquilar'];
		$comision_de_alquiler = $_POST['comision_de_alquiler'];
		$detalles_de_contruccion = $_POST['detalles_de_contruccion'];
		$cantidad_de_piesas = $_POST['cantidad_de_piesas'];
		$cantidad_de_autos_en_garage = $_POST['cantidad_de_autos_en_garage'];
		$caracteristicas_de_inmueble = $_POST['caracteristicas_de_inmueble'];

		$query = "INSERT INTO 

			users (agente_inmobiliario, tel_agente_inmobiliario,zona,barrio,direccion,precio_para_alquilar,comision_de_alquiler,detalles_de_contruccion,cantidad_de_piesas,cantidad_de_autos_en_garage,caracteristicas_de_inmueble) 


			VALUES


			('$agente_inmobiliario', '$tel_agente_inmobiliario','$zona','$barrio','$direccion','$precio_para_alquilar','$comision_de_alquiler','$detalles_de_contruccion','$cantidad_de_piesas','$cantidad_de_autos_en_garage','$caracteristicas_de_inmueble')";



		if (!$result = mysqli_query($db,$query)) {
	        exit(mysqli_error($db));
	    }
	    echo "1 Record Added!";
	}
?>