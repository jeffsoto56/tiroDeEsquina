
$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        var nombrePosicion;
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Jugador no encontrado(a), verifique la información ingresada");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><th colspan="6" class="nombreTabla text-center">LISTA DE JUGADORES</th></tr><tr><th>N°</th><th>Id</th><th>Nombre</th><th>Posicion</th><th>Equipo</th><th>Acción</th></tr>');
                for (var i = 0; i < resulBusqueda.length; i++) {
                    if (resulBusqueda[i].posicion == 1) {
                        nombrePosicion = "portero";

                    }else  if (resulBusqueda[i].posicion == 2) {
                        nombrePosicion = "Ala Izquierda";}
                        else if (resulBusqueda[i].posicion == 3) {
                        nombrePosicion = "Ala Derecha";}
                    else if (resulBusqueda[i].posicion == 4) {
                        nombrePosicion = "Pivot";}
                    
                    $('#tablaRatificar').append('<tr><td>1</td>' +
                            '<td>' + resulBusqueda[i].id + '</td>' +
                            '<td>' + resulBusqueda[i].nombre + '</td>' +
                            '<td>' + nombrePosicion + '</td>' +
                            '<td>' + resulBusqueda[i].equipo + '</td>' +
                            '<td><a class="btn-sm btn-warning" href="editarJugador/' + resulBusqueda[i].id + '">Editar</a> ' +
                            '<a class="btn-sm btn-danger" href="eliminarJugador/' + resulBusqueda[i].id + '">Eliminar</a></td>' +
                            '</tr>');
                }
            }
        });
    });

});


