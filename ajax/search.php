<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Foto</th>
							<th>Agente inmobliliario</th>
							<th>Tel Agente inmobliliario</th>
							<th>Zona</th>
							<th>Barrio</th>
							<th>Direccion</th>
							<th>Precio para alquilar</th>
							<th>Comision de alquiler</th>
							<th>Detalles de contruccion</th>
							<th>Cantidad de piesas</th>
							<th>Cantidad de autos en garage</th>
							<th>Caracteristicas de inmueble</th>
							<th>Editar</th>
							<th>Borrar</th>
						</tr>';

	
	$criterio = $_GET['criterio'];

	// $query = "SELECT * FROM users";

	$query = "SELECT * FROM users WHERE agente_inmobiliario LIKE '%".$criterio."%' 
				

				OR tel_agente_inmobiliario LIKE '%".$criterio."%'
				OR zona LIKE '%".$criterio."%'
				OR barrio LIKE '%".$criterio."%'
				OR direccion LIKE '%".$criterio."%'
				OR precio_para_alquilar LIKE '%".$criterio."%'
				OR comision_de_alquiler LIKE '%".$criterio."%'
				OR detalles_de_contruccion LIKE '%".$criterio."%'
				OR cantidad_de_piesas LIKE '%".$criterio."%'
				OR cantidad_de_autos_en_garage LIKE '%".$criterio."%'
				OR caracteristicas_de_inmueble LIKE '%".$criterio."%'

				";

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
				<td style="text-align:center;" ><img heigth="90" width="90" src="ajax/files/'.$row['img'].'"></td>
				<td>'.$row['agente_inmobiliario'].'</td>
				<td>'.$row['tel_agente_inmobiliario'].'</td>
				<td>'.$row['zona'].'</td>
				<td>'.$row['barrio'].'</td>
				<td>'.$row['direccion'].'</td>
				<td>'.$row['precio_para_alquilar'].'</td>
				<td>'.$row['comision_de_alquiler'].'</td>
				<td>'.$row['detalles_de_contruccion'].'</td>
				<td>'.$row['cantidad_de_piesas'].'</td>
				<td>'.$row['cantidad_de_autos_en_garage'].'</td>
				<td>'.$row['caracteristicas_de_inmueble'].'</td>
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