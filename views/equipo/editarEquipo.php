<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Equipo</h1>
    <form id="MyForm" action="<?php echo URL; ?>equipo/actualizarEquipo" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL EQUIPO</legend>
          
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="idEquipo" class="col-xs-2 control-label">id:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="idEquipo" name="idEquipo" value='<?php echo $this->datosEquipo[0]['id']; ?> 'disabled=""/>
                    <input type="hidden"id="idEquipo" name="idEquipo" value='<?php echo $this->datosEquipo[0]['id']; ?> '/>
                </div>
                <label for="txt_nombreEquipo" class="col-xs-2 control-label">Nombre:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="txt_nombreEquipo" name="txt_nombreEquipo" value='<?php echo $this->datosEquipo[0]['nombre']; ?>'/>
                </div>
                <label for="txt_escudo" class="col-xs-2 control-label">Escudo:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="txt_escudo" name="txt_escudo" value='<?php echo $this->datosEquipo[0]['escudo']; ?>'/>
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