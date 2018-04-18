// Add Record
function addRecord() {
    // get values
    var agente_inmobiliario = $("#agente_inmobiliario").val();
    var tel_agente_inmobiliario = $("#tel_agente_inmobiliario").val();
    var zona = $("#zona").val();
    var barrio = $("#barrio").val();
    var direccion = $("#direccion").val();
    var precio_para_alquilar = $("#precio_para_alquilar").val();
    var comision_de_alquiler = $("#comision_de_alquiler").val();
    var detalles_de_contruccion = $("#detalles_de_contruccion").val();
    var cantidad_de_piesas = $("#cantidad_de_piesas").val();
    var cantidad_de_autos_en_garage = $("#cantidad_de_autos_en_garage").val();
    var caracteristicas_de_inmueble = $("#caracteristicas_de_inmueble").val();

    // Add record
    $.post("ajax/addRecord.php", {
        
        agente_inmobiliario: agente_inmobiliario,
        tel_agente_inmobiliario: tel_agente_inmobiliario,
        zona: zona,
        barrio: barrio,
        direccion: direccion,
        precio_para_alquilar: precio_para_alquilar,
        comision_de_alquiler: comision_de_alquiler,
        detalles_de_contruccion: detalles_de_contruccion,
        cantidad_de_piesas: cantidad_de_piesas,
        cantidad_de_autos_en_garage: cantidad_de_autos_en_garage,
        caracteristicas_de_inmueble: caracteristicas_de_inmueble

    }, function (data, status) {

        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#agente_inmobiliario").val("");
        $("#tel_agente_inmobiliario").val("");
        $("#zona").val("");
        $("#barrio").val();
        $("#direccion").val("");
        $("#precio_para_alquilar").val("");
        $("#comision_de_alquiler").val("");
        $("#detalles_de_contruccion").val("");
        $("#cantidad_de_piesas").val("");
        $("#cantidad_de_autos_en_garage").val("");
        $("#caracteristicas_de_inmueble").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Seguro deseas borrar el inmueble?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {

                console.log(data);
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_agente_inmobiliario").val(user.agente_inmobiliario);
            $("#update_tel_agente_inmobiliario").val(user.tel_agente_inmobiliario);
            $("#update_zona").val(user.zona);
            $("#update_barrio").val(user.barrio);
            $("#update_direccion").val(user.direccion);
            $("#update_precio_para_alquilar").val(user.precio_para_alquilar);
            $("#update_comision_de_alquiler").val(user.comision_de_alquiler);
            $("#update_detalles_de_contruccion").val(user.detalles_de_contruccion);
            $("#update_cantidad_de_piesas").val(user.cantidad_de_piesas);
            $("#update_cantidad_de_autos_en_garage").val(user.cantidad_de_autos_en_garage);
            $("#update_caracteristicas_de_inmueble").val(user.caracteristicas_de_inmueble);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var agente_inmobiliario = $("#update_agente_inmobiliario").val();
    var tel_agente_inmobiliario = $("#update_tel_agente_inmobiliario").val();
    var zona = $("#update_zona").val();
    var barrio = $("#update_barrio").val();
    var direccion = $("#update_direccion").val();
    var precio_para_alquilar = $("#update_precio_para_alquilar").val();
    var comision_de_alquiler = $("#update_comision_de_alquiler").val();
    var detalles_de_contruccion = $("#update_detalles_de_contruccion").val();
    var cantidad_de_piesas = $("#update_cantidad_de_piesas").val();
    var cantidad_de_autos_en_garage = $("#update_cantidad_de_autos_en_garage").val();
    var caracteristicas_de_inmueble = $("#update_caracteristicas_de_inmueble").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            agente_inmobiliario: agente_inmobiliario,
            tel_agente_inmobiliario: tel_agente_inmobiliario,
            zona: zona,
            barrio: barrio,
            direccion: direccion,
            precio_para_alquilar: precio_para_alquilar,
            comision_de_alquiler: comision_de_alquiler,
            detalles_de_contruccion: detalles_de_contruccion,
            cantidad_de_piesas: cantidad_de_piesas,
            cantidad_de_autos_en_garage: cantidad_de_autos_en_garage,
            caracteristicas_de_inmueble: caracteristicas_de_inmueble
        
        },
        function (data, status) {

            console.log(data);
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}


// READ records
function search() {

    //$('.cargando').toggle();

    var criterio = $('#criterio').val()

    $.get("ajax/search.php", { criterio : criterio }, function (data, status) {
        console.log(data);
      //  $('.cargando').toggle();
        $(".records_content").html(data);
    });
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});