
$(function ()
{
    var comilla = "'";
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

                    } else if (resulBusqueda[i].posicion == 2) {
                        nombrePosicion = "Ala Izquierda";
                    }
                    else if (resulBusqueda[i].posicion == 3) {
                        nombrePosicion = "Ala Derecha";
                    }
                    else if (resulBusqueda[i].posicion == 4) {
                        nombrePosicion = "Pivot";
                    }

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
    $("#tf_Niveles").change(function () {
        $("#listaEstudiantes").empty();
        $("#tf_Grupos").empty();
        var nivelSeleccionado = $("#tf_Niveles").val();
        $.getJSON('../jugador/cargaGrupos/' + nivelSeleccionado, function (Gru) {
            $('#tf_Grupos').append('<option value="">Seleccione</option>');
            for (var iP = 0; iP < Gru.length; iP++) {
                $("#tf_Grupos").append('<option value="' + Gru[iP].grupo + '">' + Gru[iP].grupo + '</option>');
            }
        });
    });

    $("#tf_Grupos").change(function () {

        //Activo la Animación para carga de datos
        $("#listaEstudiantes").empty();
        var banderaGrupoB = 0;
        var banderaGrupoC = 0;
        var consulta = {nivelSeleccionado: $("#tf_Niveles").val(), grupoSeleccionado: $("#tf_Grupos").val()};
        //Realizo la consulta
        $.post('../jugador/cargaSeccion/', consulta, function (seccionElegida, success) {
            var arraySalida = "";
            arraySalida += '<thead><tr><td colspan="5" class="text-center">' + consulta.nivelSeleccionado + '-' + consulta.grupoSeleccionado + '</td></tr>';
            arraySalida += '<tr><td colspan="5" class="text-center">&nbsp;</td></tr><tr><td colspan="5" class="text-center">Grupo A</td></tr>';
            arraySalida += '<tr><th>N°</th><th>Identificación</th><th>Nombre del Estudiante</th><th>Condición</th><th class="text-center">Opciones</th></tr></thead><tbody>';

            for (var linea = 0; linea < seccionElegida.length; linea++) {
                if (seccionElegida[linea].sub_grupo == 'B' && banderaGrupoB == 0) {
                    arraySalida += '<tr><td colspan="4" class="text-center">&nbsp;</td></tr><tr><td colspan="4" class="text-center">Grupo B</td></tr>';
                    banderaGrupoB = 1;
                } else if (seccionElegida[linea].sub_grupo == 'C' && banderaGrupoC == 0) {
                    arraySalida += '<tr><td colspan="4" class="text-center">&nbsp;</td></tr><tr><td colspan="4" class="text-center">Grupo C</td></tr>';
                    banderaGrupoC = 1;
                }

                arraySalida += '<tr id="' + seccionElegida[linea].cedula + '"><td>' + (linea + 1) + '</td><td>' +
                        seccionElegida[linea].cedula + '</td><td>' + seccionElegida[linea].apellido1 + ' ' +
                        seccionElegida[linea].apellido2 + ' ' + seccionElegida[linea].nombre + '</td><td>' +
                        seccionElegida[linea].condicion + '</td>';
                arraySalida += '<td><a class="btn-sm btn-primary"  onclick="copiarTexto(' + comilla + seccionElegida[linea].cedula + comilla +  ')"> Agregar</a></td></tr>';

            }
            arraySalida += '<tr><td colspan="5" class="text-center">Ultima Línea</td></tr></tbody>';
            $('#listaEstudiantes').append(arraySalida);
        }, "json");
    });
    if (userName < 3) {
                    arraySalida += '<td><a class="btn-sm btn-primary" href="modificarSeccion/' + seccionElegida[linea].cedula + '">Modificar Sección</a></td></tr>';
                } else {
                    arraySalida += '<td>-</td></tr>';
                }
});
function copiarTexto($id_busqueda) {
    var datosJugador = document.getElementById($id_busqueda);
    var cedulaJugador = document.getElementById("txt_idJugador");
    var nombreJugador = document.getElementById("txt_nombreJugador");
    cedulaJugador.value = datosJugador.cells[1].innerHTML;
    nombreJugador.value = datosJugador.cells[2].innerHTML;
}
