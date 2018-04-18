<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiara Admin Inmuebles</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/estilos.css"/>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Kiara Admin Inmuebles</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li><a href="#">Inicio</a></li> -->
      <!-- <li><a href="#"> Buscardor </a></li>
      <li><a href="#">(Modulo 3)</a></li> -->
    </ul>
  </div>
</nav>

<!-- Content Section -->
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <img class="icon-accion" data-toggle="modal" data-target="#add_new_record_modal" src="img/add.png" height="34" width="34">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Lista de inmuebles:</h3>
            <br>
            <div class="row">
                
                <input type="text" class="form-control" id="busqueda" placeholder="Buscar...">
                <br>
                <div class="records_content"></div>
            </div>

            
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar inmueble</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">Agente inmobiliario</label>
                    <input type="text" id="agente_inmobiliario" placeholder="Agente inmobiliario" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Tel. Agente inmobiliario</label>
                    <input type="text" id="tel_agente_inmobiliario" placeholder="Tel. Agente inmobiliario" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Zona</label>

                    <select id="zona" class="form-control" id="sel1">
                        <option value="Rutal">Rutal</option>
                        <option value="Urbana">Urbana</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="last_name">Barrio</label>
                    <input type="text" id="barrio" placeholder="Barrio" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Direccion</label>
                    <input type="text" id="direccion" placeholder="Direccion" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Precio para alquilar</label>
                    <input type="text" id="precio_para_alquilar" placeholder="Precio para alquilar" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Comision de alquiler</label>
                    <input type="text" id="comision_de_alquiler" placeholder="Comision de alquiler" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Detalles de contruccion</label>
                    <textarea class="form-control" id="detalles_de_contruccion" placeholder="Detalles de contruccion"></textarea>
                </div>

                <div class="form-group">
                    <label for="last_name">Cantidad de piesas</label>
                    <input type="text" id="cantidad_de_piesas" placeholder="Cantidad de piesas" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Cantidad de autos en garage</label>
                    <input type="text" id="cantidad_de_autos_en_garage" placeholder="Cantidad de autos en garage" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Caracteristicas de inmueble</label>
                    <textarea class="form-control" id="caracteristicas_de_inmueble" placeholder="Caracteristicas de inmueble"></textarea>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Crear</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar inmueble</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">Agente inmobiliario</label>
                    <input type="text" id="update_agente_inmobiliario" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Tel. Agente inmobiliario</label>
                    <input type="text" id="update_tel_agente_inmobiliario" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Zona</label>

                    <select id="update_zona" class="form-control" id="sel1">
                        <option value="Rutal">Rutal</option>
                        <option value="Urbana">Urbana</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="last_name">Barrio</label>
                    <input type="text" id="update_barrio" placeholder="Barrio" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Direccion</label>
                    <input type="text" id="update_direccion" placeholder="Direccion" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Precio para alquilar</label>
                    <input type="text" id="update_precio_para_alquilar" placeholder="Precio para alquilar" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Comision de alquiler</label>
                    <input type="text" id="update_comision_de_alquiler" placeholder="Comision de alquiler" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Detalles de contruccion</label>
                    <textarea class="form-control" id="update_detalles_de_contruccion" placeholder="Detalles de contruccion"></textarea>
                </div>

                <div class="form-group">
                    <label for="last_name">Cantidad de piesas</label>
                    <input type="text" id="update_cantidad_de_piesas" placeholder="Cantidad de piesas" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Cantidad de autos en garage</label>
                    <input type="text" id="update_cantidad_de_autos_en_garage" placeholder="Cantidad de autos en garage" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Caracteristicas de inmueble</label>
                    <textarea class="form-control" id="update_caracteristicas_de_inmueble" placeholder="Caracteristicas de inmueble"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Guardar cambios</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
