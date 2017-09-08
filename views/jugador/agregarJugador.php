<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <div class="form-group">
        <label for="tf_Niveles" class="col-xs-2 control-label">Nivel:</label>
        <div class="col-xs-2">
            <select class="form-control input-sm" name="tf_Niveles" id="tf_Niveles">
                <option value="">Seleccione</option>
                <?php
                foreach ($this->consultaNiveles as $value) {
                    ?>
                    <option value="<?php echo $value['nivel']; ?>"><?php echo $value['nivel']; ?></option>
                    <?php
                }
                ?>  
            </select>
        </div>
        <label for="tf_Grupos" class="col-xs-2 control-label">Grupo:</label>
        <div class="col-xs-2">
            <select class="form-control input-sm" name="tf_Grupos" id="tf_Grupos">
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-xs-12">
        <table class="table table-condensed" id="listaEstudiantes"></table>
    </div>
</div>

<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>jugador/guardarJugador" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL JUGADOR</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_idJugador" class="col-xs-1 control-label">Cedula:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="txt_idJugador" name="txt_idJugador"/>
                </div>
                <label for="txt_nombreJugador" class="col-xs-1 control-label">Nombre:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="txt_nombreJugador" name="txt_nombreJugador"/>
                </div>
                <label for="txt_posicion" class="col-xs-1 control-label">Posicion:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_posicion" id="txt_posicion">
                        <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaPosiciones as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['descripcion']."</option>";
                        }
                            ?>
                    </select>
                </div>
                
                
                    
                
                <label for="txt_equipo" class="col-xs-1 control-label">Equipo:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_equipo" id="txt_equipo">
                        <option value="">Seleccione Equipo</option>
                        <?php
                            foreach ($this->consultaEquipos as $value) {
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