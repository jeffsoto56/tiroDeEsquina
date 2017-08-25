<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista Jornada</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>id</th>
            <th>Equipo casa</th>
            <th>Equipo visita</th>
            <th>Fecha jornada</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Está seguro que desea eliminar el equipo?'";
        foreach ($this->listaJornadas as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td>';
            echo $value['Jornada'];
            echo '</td>';
            echo '<td>';
            echo $value['equipoCasa'];
            echo '</td>';
            echo '<td>';
            echo $value['equipoVisita'];
            echo '</td>';
            echo '<td>';
            echo $value['fecha jornada'];
            echo '</td>';
            echo '<td class="text-center">';
            echo '<a class="btn-sm btn-primary" href="editarEquipo/' . $value['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp;';
            echo '<a class="btn-sm btn-primary" href="eliminarEquipo/' . $value['id'] . '"onclick = "return confirm(' . $mensaje . ');">Eliminar</a>';
            echo '</td>';
            echo '</tr>';
            $con++;

            foreach ($this->consultaEquipos as $equipo) {
                if ($equipo['id'] == $value['id_equipoCasa']) {
                    echo $equipo['nombre'];
                }
            }
            foreach ($this->consultaEquipos as $equipo) {
                if ($equipo['id'] == $value['id_equipoVista']) {
                    echo $equipo['nombre'];
                }
            }
            foreach ($this->consultaEquipos as $equipo) {
                if ($equipo['id'] == $value['id_fechaJornada']) {
                    echo $equipo['nombre'];
                }
            }
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