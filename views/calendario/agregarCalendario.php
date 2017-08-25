_<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>calendario/guardarCalendario" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos de Calendario</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_nombreCalendario" class="col-xs-2 control-label">Nombre calendario:</label>
                <div class="col-xs-2">
                <input type="text" class="form-control input-sm"  id="txt_nombreCalendario" name="txt_nombreCalendario"/>
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