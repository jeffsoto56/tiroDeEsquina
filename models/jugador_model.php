<?php

Class Jugador_model extends Models {

    public function __construct() {
        parent::__construct();
    }

    /* Inserta Equipo en la BD */

    public function guardarJugador($datos) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJugador = $this->db->select("SELECT * FROM jugador "
                . "WHERE id = '" . $datos['txt_idJugador'] . "' ");

        if ($consultaExistenciaJugador != null) {

            echo 'Error Ya Existe con el mismo nombre';
            die;
        } else {

            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('Jugador', array(
                'id' => $datos['txt_idJugador'],
                'nombre' => $datos['txt_nombreJugador'],
                'Posicion' => $datos['txt_posicion'],
                'equipo' => $datos['txt_equipo']));
        }
    }

    /* Inserta Equipo en la BD */

    public function consultaJugadores() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaJugadores = $this->db->select("SELECT * FROM jugador ");
        return $consultalistaJugadores;
    }

    public function datosJugador($id) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJugador = $this->db->select("SELECT * FROM jugador "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaJugador != null) {


            return $consultaExistenciaJugador;
        } else {

            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error jugador no encontrado';
            die;
        }
    }

    public function actualizarJugador($datos) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJugador = $this->db->select("SELECT * FROM jugador "
                . "WHERE id = '" . $datos['idJugador'] . "' ");

        if ($consultaExistenciaJugador != null) {
            $posData = array(
                'nombre' => $datos['txt_nombreJugador'],
                'posicion' => $datos['txt_posicion']
            );

            $this->db->update('jugador', $posData, "`id` = '{$datos['idJugador']}'");
        } else {
            echo 'Error NO Existe jugador';
            die;
        }
    }

    public function eliminarJugador($id) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJugador = $this->db->select("SELECT * FROM jugador "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaJugador != null) {
            $this->db->delete('Jugador', "`id` = '{$id}'");
        } else {
            echo 'Error no Existe Jugador';
            die;
        }
    }

    public function consultaEquipos() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaEquipos = $this->db->select("SELECT * FROM equipo ");
        return $consultalistaEquipos;
    }

    public function consultaPosiciones() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaPosiciones = $this->db->select("SELECT * FROM tipoposicion ");
        return $consultaPosiciones;
    }


    public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT j.id,j.nombre as nombreJugador,j.posicion,j.equipo,e.nombre "
                . "FROM jugador as j, equipo as e "
                . "WHERE j.nombre LIKE '%" . $ced_estudiante . "%' "
                . "AND j.equipo = e.id ");
        echo json_encode($resultado);
    }
    public function consultaNiveles() {
        return $this->db->select("SELECT DISTINCT nivel "
                        . "FROM sipce_grupos "
                        . "WHERE annio = " . 2017 . " "
                        . "ORDER BY nivel");
    }
public function cargaGrupos($idNivel) {
        $resultado = $this->db->select("SELECT DISTINCT grupo FROM sipce_grupos "
                . "WHERE nivel = :nivel "
                . "AND annio = " . 2017 . " "
                . "AND grupo <> 0 "
                . "ORDER BY grupo", array('nivel' => $idNivel));
        echo json_encode($resultado);
    }

    public function cargaSeccion($consulta) {
        $resultado2 = $this->db->select("SELECT e.cedula,e.nombre,e.apellido1,e.apellido2,g.sub_grupo,r.condicion "
                . "FROM sipce_estudiante as e, sipce_grupos as g, sipce_matricularatificacion as r "
                . "WHERE e.cedula = g.ced_estudiante "
                . "AND e.cedula = r.ced_estudiante "
                . "AND g.nivel = " . $consulta['nivelSeleccionado'] . " "
                . "AND g.grupo = " . $consulta['grupoSeleccionado'] . " "
                . "AND g.annio = " . 2017 . " "
                . "AND r.anio = " . 2017 . " "
                . "ORDER BY g.sub_grupo,e.apellido1,e.apellido2,e.nombre");
        echo json_encode($resultado2);
    }


}

?>
