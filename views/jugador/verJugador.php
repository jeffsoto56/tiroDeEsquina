<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <div class="col-xs-3">
    Búscar jugador:
    </div>
    <div class="col-xs-2">
        <input type="text" class="input-sm validate[required]" name="tf_cedulaEstudiante" id="tf_cedulaEstudiante" />
    </div>
    <div class="col-xs-2">
        <input type="button" class="btn-sm btn-success" id="buscarEstudianteRatificar" value="Buscar" />
    </div>
    <table class="table table-condensed"id="tablaRatificar">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Jugadores</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>id</th>
            <th>Nombre</th>
            <th>Posicion</th>
            <?php if (Session::get('tipoUsuario') >2) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Está seguro que desea eliminar el jugador?'";
        foreach ($this->consultaJugadores as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td>';
            echo $value['id'];
            echo '</td>';
            echo '<td>';
            echo $value['nombre'];
            echo '</td>';
            echo '<td>';
            if ($value['posicion'] == 1) {
                echo 'Portero';
            } elseif ($value['posicion'] == 2) {
                echo 'Ala Izquierda';
            } elseif ($value['posicion'] == 3) {
                echo 'Ala Derecha';
            } elseif ($value['posicion'] == 4) {
                echo 'Pivot';
            }
            echo '</td>';
            $con++;


            if (Session::get('tipoUsuario') < 2) {
                echo '<td class="text-center">';
                echo '<a class="btn-sm btn-primary" href="editarJugador/' . $value['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp;';
                echo '<a class="btn-sm btn-primary" href="eliminarJugador/' . $value['id'] . '"onclick = "return confirm(' . $mensaje . ');">Eliminar</a>';
                echo '</td>';
            }
            echo '</tr>';
        }
        ?>
        <tr>
            <td colspan='6' class="lineaFin"></td> 

        </tr>
        <tr>
            <td colspan='6'>Última línea</td>
        </tr>
    </table>
</center>