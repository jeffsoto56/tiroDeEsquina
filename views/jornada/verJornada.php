<?php
//print_r($this->listaJornadas);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista Jornada</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>id Calendario</th>
            <th>Equipo casa</th>
            <th>Equipo visita</th>
            <th>Fecha jornada</th>
            <?php if (Session::get('tipoUsuario') >2) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Está seguro que desea eliminar la Jornada?'";
        foreach ($this->listaJornadas as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td>';
            foreach ($this->listaCalendario as $calendario) {
                if ($calendario['id'] == $value['idCalendario']) {
                    echo $calendario['nombreCalendario'];
                }
            }
            echo '</td>';
            echo '<td>';
            foreach ($this->consultaEquipos as $equipo) {
                if ($equipo['id'] == $value['equipoCasa']) {
                    echo $equipo['nombre'];
                }
            }
            echo '</td>';
            echo '<td>';
            foreach ($this->consultaEquipos as $equipo) {
                if ($equipo['id'] == $value['equipoVisita']) {
                    echo $equipo['nombre'];
                }
            }
            echo '</td>';
            echo '<td>';
            echo $value['fecha'];
            echo '</td>';
            $con++;
            
            if (Session::get('tipoUsuario') < 2) {
            echo '<td class="text-center">';
            echo '<a class="btn-sm btn-primary" href="editarJornada/' . $value['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp;';
            echo '<a class="btn-sm btn-primary" href="eliminarJornada/' . $value['id'] . '"onclick = "return confirm(' . $mensaje . ');">Eliminar</a>';
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