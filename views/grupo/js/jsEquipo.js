
$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Persona no encontrada, verifique el formato (ceros y guiones) y número de identificación.\nEj: 2-0456-0789, 1-1122-0567.\nNota: La Base de Datos esta actualizada al 2013 y solo posee Costarricenses y Nacionalizados");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><td colspan="6" class="nombreTabla">EQUIPO</td></tr><tr><th>N°</th><th>ID</th><th>NOMBRE EQUIPO</th><th>ESCUDO</th><th>Acción</th></tr>' +
                        '<tr><td>1</td>' +
                        '<td>' + resulBusqueda[0].id + '</td>' +
                        '<td>' + resulBusqueda[0].nombre + '</td>' +
                        '<td>' + resulBusqueda[0].escudo + '</td>' +
                        '<td>' + resulBusqueda[0].accion + '</td>' +'</td>'); 
                        
                        
                  if (userName < 2) {
                        $('#tablaRatificar').append('<td><a class="btn-sm btn-warning" href="editarEquipo/' + resulBusqueda[i].id + '">Editar</a> ' +
                                '<a class="btn-sm btn-danger" href="eliminarEquipo/' + resulBusqueda[i].id + '">Eliminar</a></td>' +
                                '</tr>');
                    } else {
                        $('#tablaRatificar').append('<td>-</td></tr>');
                    }
            }
        });
    });

});


