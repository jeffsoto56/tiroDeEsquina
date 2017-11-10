_<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>grupo/guardarGrupo" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL GRUPO</legend>
                <!--L2 Nombre Estudiante (Formulario Hugo)-->
                <div class="form-group">
        <label for="txt_nombreGrupo" class="col-xs-2 control-label">Nombre del Grupo:</label>
                    <div class="col-xs-2">
                        <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="txt_nombreGrupo" name="txt_nombreGrupo"/>
                    </div>
                    
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