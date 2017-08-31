<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <label for="txt_nombreCalendario" class="col-xs-2 control-label">Buscar Calendario:</label>
    <div class="col-xs-2">
        <select class="form-control input-sm validate[required]" name="tf_cedulaEstudiante" id="tf_cedulaEstudiante">

            <option value="">Seleccione calendario:</option>
            <?php
            foreach ($this->consultaCalendario as $value) {
                echo "<option value='" . $value['id'] . "' ";
                if ($value['id'] == $this->datosCalendario[0]['idCalendario'])
                    echo "selected";
                ?> > <?php
                echo $value['nombreCalendario'] . "</option>";
            }
            ?>
        </select> 

    </div>
    <table class="table table-condensed" id="tablaRatificar" >
        <tr>
            <th colspan="5" class="nombreTabla text-center">Lista Calendario</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>id</th>
            <th>Nombre Calendario</th>
            <?php if (Session::get('tipoUsuario') > 2) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Está seguro que desea eliminar el equipo?'";
        foreach ($this->listaCalendario as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td>';
            echo $value['id'];
            echo '</td>';
            echo '<td>';
            echo $value['nombreCalendario'];
            echo '</td>';

            $con++;

            if (Session::get('tipoUsuario') < 2) {
                echo '<td class="text-center">';
                echo '<a class="btn-sm btn-primary" href="editarCalendario/' . $value['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp;';
                echo '<a class="btn-sm btn-primary" href="eliminarCalendario/' . $value['id'] . '"onclick = "return confirm(' . $mensaje . ');">Eliminar</a>';
                echo '</td>';
                echo '</tr>';
            }
        }
        ?>
        <tr>
            <td colspan='5' class="lineaFin"></td> 

        </tr>
        <tr>
            <td colspan='5'>Última línea</td>
        </tr>
    </table>
</center>