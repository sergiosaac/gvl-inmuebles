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

    // Updaste User details
    $query = "UPDATE users SET agente_inmobiliario = '$agente_inmobiliario', tel_agente_inmobiliario = '$tel_agente_inmobiliario', zona = '$zona' WHERE id = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error($db));
    }
}