<?php 
    

    $file = $_FILES['img']['name'];
 
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    if(!is_dir("files/")) 
        mkdir("files/", 0777);
     
    $nombreFull = time().$file;

    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['img']['tmp_name'],"files/".$nombreFull))
    {
       echo $nombreFull;//devolvemos el nombre del archivo para pintar la imagen
    }



