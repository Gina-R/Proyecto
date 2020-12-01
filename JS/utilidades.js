

function cargarOfertas(identificador) {

    var parametros = {
        "valor1": identificador
    };
    $.ajax({
        datos: parametros,
        url: './clases/cargar_ofertas.php',
        type: 'post',

        beforeSend: function () {
            $(identificador).html("Cargando....");
        },
        success: function (resultado) {
            $(identificador).html(resultado);
        }
    });

}

function buscador_viajes(identificador, origen, destino) {

    var parametros = {
        "origen": origen,
        "destino": destino
    };
    $.ajax({
        data: parametros,
        url: './clases/buscar_viajes.php',
        type: 'post',
       // dataType: 'json',
        beforeSend: function () {
            $(identificador).html("Cargando busqueda....");
        },
        success: function (resultado) {
            $(identificador).html(resultado);
        }
    });

}