_<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>jornada/guardarJornada" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos de jornada</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">

                
                 <label for="txt_nombreCalendario" class="col-xs-2 control-label">Calendario:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_nombreCalendario" id="txt_nombreCalendario">

                        <option value="">Seleccione calendario</option>
                        <?php
                        foreach ($this->consultaCalendario as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['nombreCalendario'] . "</option>";
                        }
                        ?>
                    </select> 

                </div>

            </div>
            <div class="form-group">

                <label for="txt_fechaJornada" class="col-xs-2 control-label">Fecha de partido:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm validate[required]"  id="txt_fechaJornada" name="txt_fechaJornada"/>
                </div>

                
                <label for="txt_equipoCasa" class="col-xs-2 control-label">Equipo casa:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_equipoCasa" id="txt_equipoCasa">
                        <option value="">Seleccione Equipo Casa</option>
                        <?php
                        foreach ($this->consultaEquipos as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                    </select> 

                </div>

                
                <label for="txt_equipoVisita" class="col-xs-2 control-label">Equipo visita:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_equipoVisita" id="txt_equipoVisita">
                        <option value="">Seleccione Equipo Visita</option>
                        <?php
                        foreach ($this->consultaEquipos as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                    </select> 

                </div>


            </div> 
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Guardar e Imprimir" />
                </div>
            </div>
        </fieldset>
    </form>
</div>