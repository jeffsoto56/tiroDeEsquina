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
                'Posicion' => $datos['txt_posicion']));
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
                . "WHERE id = " . $id . " ");

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
        $resultado = $this->db->select("SELECT * "
                . "FROM jugador "
                . "WHERE nombre LIKE '%" . $ced_estudiante . "%'");
        echo json_encode($resultado);
    }

}

?>
