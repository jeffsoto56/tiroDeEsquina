<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Jugadores</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>id</th>
            <th>Nombre</th>
            <th>Posicion</th>
            <th colspan="2" class="text-center">Acción</th>
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
            echo $value['posicion'];
            echo '</td>';
            echo '<td class="text-center">';
            echo '<a class="btn-sm btn-primary" href="editarJugador/' . $value['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp;';
            echo '<a class="btn-sm btn-primary" href="eliminarJugador/' . $value['id'] . '"onclick = "return confirm('.$mensaje.');">Eliminar</a>';
            echo '</td>';
            echo '</tr>';
            $con++;
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