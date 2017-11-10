<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Grupo</h1>
    <form id="MyForm" action="<?php echo URL; ?>grupo/actualizarGrupo" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL GRUPO</legend>
          
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="idGrupo" class="col-xs-2 control-label">id:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="idGrupo" name="idGrupo" value='<?php echo $this->datosGrupo[0]['id']; ?> 'disabled=""/>
                    <input type="hidden"id="idGrupo" name="idGrupo" value='<?php echo $this->datosGrupo[0]['id']; ?> '/>
                </div>
                <label for="txt_nombreGrupo" class="col-xs-2 control-label">Nombre:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="txt_nombreGrupo" name="txt_nombreGrupo" value='<?php echo $this->datosGrupo[0]['nombre']; ?>'/>
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