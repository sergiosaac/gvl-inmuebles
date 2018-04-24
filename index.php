<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Kiara - Admin Inmuebles</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"> Kiara - Admin Inmuebles </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" id="criterio" onkeyup="search()" type="text" placeholder="Buscar...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="">
        <div class="card-header">

          <div class="pull-right">
              <img class="icon-accion" data-toggle="modal" data-target="#add_new_record_modal" src="img/add.png" height="34" width="34">
          </div>
          <br>

          <i class="fa fa-table"></i> Listado de inmuebles 
        </div>
          <br>
          <div style="font-size: 13px;" class="table-responsive">

            <div class="records_content"></div>

          </div>
        
        
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>

  <script type="text/javascript">
    
     $("body").toggleClass("sidenav-toggled");
  </script>

  <script type="text/javascript" src="js/script.js"></script>



<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
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
                    <label for="last_name">Foto inmueble: </label>
                    
                    <form class="fotoForm" enctype="multipart/form-data" method="POST">
                        <input id="img" type="file" name="img">    
                    </form>
                    
                </div>

                <div class="form-group">
                    <label for="email">Zona</label>

                    <select id="zona" class="form-control" id="sel1">
                        <option value="Rural">Rural</option>
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
                    <label for="last_name">Precio</label>
                    <input type="text" id="precio_para_alquilar" placeholder="Precio" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Comision</label>
                    <input type="text" id="comision_de_alquiler" placeholder="Comision" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Detalles de contruccion</label>
                    <textarea class="form-control" id="detalles_de_contruccion" placeholder="Detalles de contruccion"></textarea>
                </div>

                <div class="form-group">
                    <label for="last_name">Cantidad de habitaciones</label>
                    <input type="text" id="cantidad_de_piesas" placeholder="Cantidad de habitaciones" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Propietario</label>
                    <input type="text" id="cantidad_de_autos_en_propietario" placeholder="Propietario" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Caracteristicas de inmueble</label>
                    <textarea class="form-control" id="caracteristicas_de_inmueble" placeholder="Caracteristicas de inmueble"></textarea>
                </div>
                <input type="hidden" name="imgNombre" id="imgNombre">

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
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">Agente inmobiliario</label>
                    <input type="text" id="update_agente_inmobiliario" placeholder="Agente inmobiliario" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Tel. Agente inmobiliario</label>
                    <input type="text" id="update_tel_agente_inmobiliario" placeholder="Last Name" class="form-control"/>
                </div>

                <!-- <div class="form-group">
                    <label for="last_name">Foto inmueble: </label>
                    
                    <form class="fotoForm" enctype="multipart/form-data" method="POST">
                        <input id="img" type="file" name="img">    
                    </form>
                    
                </div> -->

                <div class="form-group">
                    <label for="email">Zona</label>

                    <select id="update_zona" class="form-control" id="sel1">
                        <option value="Rural">Rural</option>
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
                    <label for="last_name">Precio</label>
                    <input type="text" id="update_precio_para_alquilar" placeholder="Precio" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Comision</label>
                    <input type="text" id="update_comision_de_alquiler" placeholder="Comision" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Detalles de contruccion</label>
                    <textarea class="form-control" id="update_detalles_de_contruccion" placeholder="Detalles de contruccion"></textarea>
                </div>

                <input type="hidden" name="update_imgNombre" id="update_imgNombre">
                <div class="form-group">
                    <label for="last_name">Cantidad de habitaciones</label>
                    <input type="text" id="update_cantidad_de_piesas" placeholder="Cantidad de habitaciones" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Propietario</label>
                    <input type="text" id="update_cantidad_de_autos_en_propietario" placeholder="Propietario" class="form-control"/>
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

</body>

</html>
