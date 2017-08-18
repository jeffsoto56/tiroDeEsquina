_<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>jugador/guardarJugador" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL JUGADOR</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_idJugador" class="col-xs-2 control-label">Cedula:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="txt_idJugador" name="txt_idJugador"/>
                </div>
                <label for="txt_nombreJugador" class="col-xs-2 control-label">Nombre del Jugador:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="txt_nombreJugador" name="txt_nombreJugador"/>
                </div>
                <label for="txt_posicion" class="col-xs-2 control-label">Posicion:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_posicion" id="txt_posicion">
                        <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaPosiciones as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['descripcion']."</option>";
                        }
                            ?>
                    </select>
                </div>
                
                <label for="txt_equipo" class="col-xs-2 control-label">Equipo:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm" name="txt_equipo" id="txt_equipo">
                        <option value="0">Seleccione Equipo</option>
                        <?php
                            foreach ($this->consultaEquipos as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['nombre'] . "</option>";
                            }
                        ?>
                    </select> 

                </div>
            
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                </div>
            </div>
        </fieldset>
    </form>
</div>