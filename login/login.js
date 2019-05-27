$( document ).ready(function() {
    /* Al fer click es mostrar la taula demanada */
    $('#logIn').click(checkLog);
    $('#mssg').html("");

});

/* Log In */
var urlCheckLog = "./php/checkLog.php";
function checkLog(){
    var email = $('#email').val();
    var password = $('#password').val();
    console.log('email ->'+email+' password ->'+password);
    $.ajax({
        url: urlCheckLog,
        dataType: "jsonp",
        jsonp: "callback",
        data: {email:email,password:password},
        beforeSend: function () {
            //$("#modalBodyDelete").html('Eliminando...');
        },
        success: function (respJSON) {
            var alertSql = '<div class="alert alert-danger" role="alert">Error en la base de dades...</div>';
            var alertTrue = '<div class="alert alert-success" role="alert"> Accedint... <i class="fas fa-check"></i></div>';
            var alertFalse = '<div class="alert alert-danger" role="alert">Error: usuari/contrasenya mal escrits!</div>';
            var alertNull = '<div class="alert alert-warning" role="alert">Error: falta un camp!</div>';
            switch(respJSON.status){
                case 'true':
                    $('#mssg').html(alertTrue);
                    setTimeout(function(){ $(location).attr('href', 'http://localhost:8888/M15/CREDIT_SINTESI/CODE/codigo/'); }, 500);
                    break;
                case "sql":
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
            //$("#formUpdateUser").html('No se ha podido ELIMINAR el Usuario.');
          }
    });
}
