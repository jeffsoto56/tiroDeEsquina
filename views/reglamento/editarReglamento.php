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
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="idJornada" name="idJornada" value='<?php echo $this->datosJornadas[0]['id']; ?> 'disabled=""/>
                    <input type="hidden"id="idJornada" name="idJornada" value='<?php echo $this->datosJornadas[0]['id']; ?> '/>
                </div>
                <label for="txt_fechaJornada" class="col-xs-2 control-label">Fecha de partido:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm validate[required]"  id="txt_fechaJornada" name="txt_fechaJornada" value='<?php echo $this->datosJornadas[0]['fecha']; ?>' />
                </div>
                
                <label for="txt_nombreCalendario" class="col-xs-2 control-label">Calendario:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_nombreCalendario" id="txt_nombreCalendario">

                        <option value="">Seleccione calendario</option>
                        <?php
                        foreach ($this->consultaCalendario as $value) {
                            echo "<option value='" . $value['id'] . "' ";
                            if ($value['id'] == $this->datosJornadas[0]['idCalendario'])
                                echo "selected";
                            ?> > <?php
                            echo $value['nombreCalendario'] . "</option>";
                        }
                        ?>
                    </select> 

                </div>
                <label for="txt_equipoCasa" class="col-xs-2 control-label">Equipo casa:</label>

                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_equipoCasa" id="txt_equipoCasa">
                        <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaEquipos as $value) {
                            echo "<option value='" . $value['id'] . "' ";
                            if ($value['id'] == $this->datosJornadas[0]['equipoCasa'])
                                echo "selected";
                            ?> > <?php
                            echo $value['nombre'] . "</option>";
                        }
                        ?>

                    </select>
                </div>
                <label for="txt_equipoVisita" class="col-xs-2 control-label">Equipo visita:</label>

                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_equipoVisita" id="txt_equipoVisita">
                        <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaEquipos as $value) {
                            echo "<option value='" . $value['id'] . "' ";
                            if ($value['id'] == $this->datosJornadas[0]['equipoVisita'])
                                echo "selected";
                            ?> > <?php
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                            </select>
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