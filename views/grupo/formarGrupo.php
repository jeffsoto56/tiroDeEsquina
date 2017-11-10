_<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>grupo/guardarGrupo_equipo" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL GRUPO</legend>
                <!--L2 Nombre Estudiante (Formulario Hugo)-->
                <label for="txt_equipo" class="col-xs-1 control-label">Equipo:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="idEquipo" id="idEquipo">
                        <option value="">Seleccione Equipo</option>
                        <?php
                            foreach ($this->consultaEquipos as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['nombre'] . "</option>";
                            }
                        ?>
                    </select> 
                </div>
                
                 <label for="txt_equipo" class="col-xs-1 control-label">Grupo</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="idGrupo" id="txt_equipo">
                        <option value="">Seleccione Grupo</option>
                        <?php
                            foreach ($this->consultaGrupos as $value) {
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