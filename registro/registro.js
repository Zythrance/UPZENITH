$( document ).ready(function() {
    /* Al fer click es mostrar la taula demanada */
    $('#login').click(insertUser);
    $('#mssg').html("");

});

var urlInsertUser = "./php/insertar_usuario.php";
function insertUser(){
    var userNombre = $("#nombre").val();
    var userEmail = $("#email").val();
    var userPassword = $("#password").val();
    var userRepeatPassword = $("#repeatPassword").val();

    $.ajax({
        url: urlInsertUser,
        dataType: "jsonp",
        jsonp: "callback",
        data: {
            userNombre:userNombre,
            userEmail:userEmail,
            userPassword:userPassword,
            userRepeatPassword:userRepeatPassword
        },
        beforeSend: function () {
            //$("#divAdd").html('Creando Usuario...');
        },
        success: function (respJSON) {
            var alertSql = '<div class="alert alert-danger" role="alert"> Error en els camps. </div>';
            var alertTrue = '<div class="alert alert-success" role="alert"> Usuari registrat amb èxit. <i class="fas fa-check"></i></div>';

            var alertFalse = '<div class="alert alert-danger" role="alert">Error: usuari/contrasenya mal escrits.</div>';
            var alertNull = '<div class="alert alert-warning" role="alert">No hi ha cap contrasenya/usuari escrits!</div>';

            var status = respJSON.status;
            switch(respJSON.status){
                case '1':
                    $('#mssg').html(alertTrue);
                    setTimeout(function(){ $(location).attr('href', 'http://localhost:8888/M15/CREDIT_SINTESI/CODE/codigo/'); }, 500);
                    break;
                case "0":
                    $('#mssg').html(alertSql);
                    break;
                case "false":
                    $('#mssg').html(alertFalse);
                    break;
                case "null":
                    $('#mssg').html(alertNull);
                    break;
            }

        },
        error:function (xhr, ajaxOptions, thrownError) {
            $("#divAdd").html('Ha habido un pinche error.');
          }
    });
}
