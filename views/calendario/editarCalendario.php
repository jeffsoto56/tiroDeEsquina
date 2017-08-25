<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Calendario</h1>
    <form id="MyForm" action="<?php echo URL; ?>calendario/actualizarCalendario" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL CALENDARIO</legend>
          
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="idCalendario" class="col-xs-2 control-label">id:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="idCalendario" name="idCalendario" value='<?php echo $this->datosCalendario[0]['id']; ?> 'disabled=""/>
                    <input type="hidden"id="idCalendario" name="idCalendario" value='<?php echo $this->datosCalendario[0]['id']; ?> '/>
                </div>
                <label for="txt_nombreCalendario" class="col-xs-2 control-label">nombre calendario:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="txt_nombreCalendario" name="txt_nombreCalendario" value='<?php echo $this->datosCalendario[0]['nombreCalendario']; ?>'/>
                </div>
                
            </div> 
            <br><br>
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                </div>
            </div>
        </fieldset>
    </form>
</div>