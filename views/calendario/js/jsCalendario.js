
$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        $('#tablaRatificar').append('<tr>td>1</td>');
        var idD = $("#idCalendario").val();
        $.getJSON('buscarJornadas/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Jugador no encontrado(a), verifique la información ingresada");
            } else {
                alert(1);
                $('#tablaRatificar').append('<tr>td>1</td>');
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><th colspan="6" class="nombreTabla text-center">LISTA DE JUGADORES</th></tr><tr><th>N°</th><th>Id</th><th>Equipo casa</th><th>Equipo visita</th><th>Fecha jornada</th>');
                for (var i = 0; i < resulBusqueda.length; i++) {
                    $('#tablaRatificar').append('<tr><td>1</td>' +
                            '<td>' + resulBusqueda[i].id + '</td>' +
                            '<td>' + resulBusqueda[i].equipoCasa + '</td>' +
                            '<td>' + resulBusqueda[i].equipoVisita + '</td>' +
                            '<td>' + resulBusqueda[i].fecha + '</td>' +
                            '<td><a class="btn-sm btn-warning" href="editarJugador/' + resulBusqueda[i].id + '">Editar</a> ' +
                            '<a class="btn-sm btn-danger" href="eliminarJugador/' + resulBusqueda[i].id + '">Eliminar</a></td>' +
                            '</tr>');
                }
            }
        });
    });

});





