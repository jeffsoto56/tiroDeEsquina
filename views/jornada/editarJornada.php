<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Jornada</h1>
    <form id="MyForm" action="<?php echo URL; ?>jornada/actualizarJornada" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL JORNADA</legend>
          
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="idJornada" class="col-xs-2 control-label">id:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="idJornada" name="idJornada" value='<?php echo $this->datosJornada[0]['id']; ?> 'disabled=""/>
                    <input type="hidden"id="idJornada" name="idJornada" value='<?php echo $this->datosEquipo[0]['id']; ?> '/>
                </div>
                <label for="txt_equipoCasa" class="col-xs-2 control-label">Equipo casa:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="txt_equipoCasa" name="txt_equipoCasa" value='<?php echo $this->datosJornada[0]['nombre']; ?>'/>
                </div>
                <label for="txt_equipoVisita" class="col-xs-2 control-label">Equipo visita:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="txt_equipoVisita" name="txt_equipoVisita" value='<?php echo $this->datosJornada[0]['nombre']; ?>'/>
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