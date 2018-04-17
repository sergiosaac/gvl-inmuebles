// Add Record
function addRecord() {
    // get values
    var agente_inmobiliario = $("#agente_inmobiliario").val();
    var tel_agente_inmobiliario = $("#tel_agente_inmobiliario").val();
    var zona = $("#zona").val();

    // Add record
    $.post("ajax/addRecord.php", {
        agente_inmobiliario: agente_inmobiliario,
        tel_agente_inmobiliario: tel_agente_inmobiliario,
        zona: zona
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#agente_inmobiliario").val("");
        $("#tel_agente_inmobiliario").val("");
        $("#zona").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
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

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            agente_inmobiliario: agente_inmobiliario,
            tel_agente_inmobiliario: tel_agente_inmobiliario,
            zona: zona
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

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});