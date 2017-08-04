<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Jugador</h1>
    <form id="MyForm" action="<?php echo URL; ?>jugador/actualizarJugador" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL JUGADOR</legend>
          
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="idJugador" class="col-xs-2 control-label">id:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="idJugador" name="idJugador" value='<?php echo $this->datosJugador[0]['id']; ?> 'disabled=""/>
                    <input type="hidden"id="idJugador" name="idJugador" value='<?php echo $this->datosJugador[0]['id']; ?> '/>
                </div>
                <label for="txt_nombreJugador" class="col-xs-2 control-label">Nombre:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="txt_nombreJugador" name="txt_nombreJugador" value='<?php echo $this->datosJugador[0]['nombre']; ?>'/>
                </div>
                <label for="txt_posicion" class="col-xs-2 control-label">Posicion:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="txt_posicion" name="txt_posicion" value='<?php echo $this->datosJugador[0]['posicion']; ?>'/>
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