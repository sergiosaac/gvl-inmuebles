<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Agente inmobliliario</th>
							<th>Tel Agente inmobliliario</th>
							<th>Zona</th>
							<th>Editar</th>
							<th>Borrar</th>
						</tr>';

	$query = "SELECT * FROM users";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error($db));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['agente_inmobiliario'].'</td>
				<td>'.$row['tel_agente_inmobiliario'].'</td>
				<td>'.$row['zona'].'</td>
				<td>
					<img class="icon-accion" onclick="GetUserDetails('.$row['id'].')" src="img/deit.png" height="25" width="25">
				</td>
				<td>
					<img class="icon-accion" onclick="DeleteUser('.$row['id'].')" src="img/borrar.png" height="25" width="25">
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>