<?php
//print_r($this->estadoMatricula);
//die;
?>
<script type='text/javascript'>
  var userName = "<?php echo Session::get('tipoUsuario') ?>";
</script>
<center>    
    <div class="col-xs-3">
    Búscar equipo:
    </div>
    <div class="col-xs-2">
        <input type="text" class="input-sm validate[required]" name="tf_cedulaEstudiante" id="tf_cedulaEstudiante" />
    </div>
    <div class="col-xs-2">
        <input type="button" class="btn-sm btn-success" id="buscarEstudianteRatificar" value="Buscar" />
    </div>
    <table class="table table-condensed" id="tablaRatificar" >
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Equipos</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>id</th>
            <th>Nombre</th>
            <th>Escudo</th>
              <?php if (Session::get('tipoUsuario') >2) { ?>
            <th colspan="2" class="text-center">Acción</th>
             <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Está seguro que desea eliminar el equipo?'";
        foreach ($this->listaEquipos as $lista => $value) {
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
            echo $value['escudo'];
            echo '</td>';
            
            echo '</td>';
            $con++;
            
            if (Session::get('tipoUsuario') <2) {
            echo '<td class="text-center">';
            echo '<a class="btn-sm btn-primary" href="editarEquipo/' . $value['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp;';
            echo '<a class="btn-sm btn-primary" href="eliminarEquipo/' . $value['id'] . '"onclick = "return confirm('.$mensaje.');">Eliminar</a>';
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