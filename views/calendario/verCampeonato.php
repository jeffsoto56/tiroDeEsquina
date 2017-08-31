<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <label for="idCalendario" class="col-xs-2 control-label">Buscar Calendario:</label>
    <div class="col-xs-2">
        <select class="form-control input-sm validate[required]" name="idCalendario" id="idCalendario">

            <option value="">Seleccione calendario:</option>
            <?php
            foreach ($this->consultaCalendario as $value) {
                echo "<option value='" . $value['id'] . "'> ";

                echo $value['nombreCalendario'] . "</option>";
            }
            ?>
        </select> 

    </div>
    <div class="col-xs-2">
        <input type="button" class="btn-sm btn-success" id="buscarEstudianteRatificar" value="Buscar" />
    </div>                
</div> 
<table class="table table-condensed" id="tablaRatificar"></table>          