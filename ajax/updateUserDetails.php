<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
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

    // Updaste User details
    $query = "UPDATE users SET agente_inmobiliario = '$agente_inmobiliario', tel_agente_inmobiliario = '$tel_agente_inmobiliario', zona = '$zona' , barrio = '$barrio', direccion = '$direccion', precio_para_alquilar = '$precio_para_alquilar', comision_de_alquiler = '$comision_de_alquiler', detalles_de_contruccion = '$detalles_de_contruccion', cantidad_de_piesas = '$cantidad_de_piesas', cantidad_de_autos_en_garage = '$cantidad_de_autos_en_garage', caracteristicas_de_inmueble = '$caracteristicas_de_inmueble' WHERE id = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error($db));
    }
}