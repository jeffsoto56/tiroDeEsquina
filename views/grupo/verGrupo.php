<script type='text/javascript'>
  var userName = "<?php echo Session::get('tipoUsuario') ?>";
</script>
<center>
    <table class="table table-condensed" id="tablaRatificar" >
        <tr>
            <?php
            foreach ($this->listaGrupos as $lista => $value) {
                $mensaje = "'¿Está seguro que desea eliminar el grupo?'";
                ?>
            
            <th colspan="6" class="nombreTabla text-center"> <?php echo $value['nombre']; echo '<a class="btn-sm btn-primary" href="editarGrupo/' . $value['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp;';
            echo '<a class="btn-sm btn-primary" href="eliminarGrupo/' . $value['id'] . '"onclick = "return confirm('.$mensaje.');">Eliminar</a>';
            ?> </th>
        </tr>
        <tr>
            <th>Equipos</th>
            
            
              <?php if (Session::get('tipoUsuario') >2) { ?>
            <th colspan="2" class="text-center">Acción</th>
             <?php } ?>
        </tr>
        <?php
        
        $con = 1;
        
        
            echo '<tr>';
            echo '<td>';
            
            echo $con;
            
            echo '</td>';
            
            
            
            
            echo '</td>';
            $con++;
            
            if (Session::get('tipoUsuario') <2) {
            echo '<td class="text-center">';
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