<?php

Class Jornada_model extends Models {

    public function __construct() {
        parent::__construct();
    }

    /* Inserta Equipo en la BD */

    public function guardarJornada($datos) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJornadas = $this->db->select("SELECT * FROM jornada "
                . "WHERE nombre = '" . $datos['txt_equipoCasa'] . $datos['txt_equipoVisita'] . "' ");

        if ($consultaExistenciaJornadas != null) {

            echo 'Error Ya Existe esta jornada';
            die;
        } else {

            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('jornada', array(
                'equipoCasa' => $datos['txt_equipoCasa'],
                'equipoVisita' => $datos['txt_equipoVisita'],
                'fechaJornada' => $datos['txt_fechaJornada']));
        }
    }

    /* Inserta Equipo en la BD */

    public function listaJornadas() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaJornadas = $this->db->select("SELECT * FROM jornada ");
        return $consultalistaJornadas;
    }

    public function datosJornada($id) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJornadas = $this->db->select("SELECT * FROM jornada "
                . "WHERE id = " . $id . " ");

        if ($consultaExistenciaJornadas != null) {


            return $consultaExistenciaJornadas;
        } else {

            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error jornada no encontrada';
            die;
        }
    }

    public function actualizarJornada($datos) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJornadas = $this->db->select("SELECT * FROM jornada "
                . "WHERE id = '" . $datos['idEquipo'] . "' ");

        if ($consultaExistenciaJornadas != null) {
            $posData = array(
                
                'equipoCasa' => $datos['txt_equipoCasa'],
                'equipoVisita' => $datos['txt_equipoVisita'],
                'fechaJornada' => $datos['txt_fechaJornada']
            );

            $this->db->update('jornada', $posData, "`id` = '{$datos['idJornada']}'");
        } else {
            echo 'Error no existe Jornada';
            die;
        }
    }

    public function eliminarJornada($id) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJornadas = $this->db->select("SELECT * FROM jornado "
                . "WHERE id = '" . $id['id'] . "' ");

        if ($consultaExistenciaJornadas != null) {
            $this->db->delete('jornada', "`id` = '{$id['id']}'");
        } else {
            echo 'Error NO Existe jornada';
            die;
        }
    }

    public function consultaJornadas() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaJornadas = $this->db->select("SELECT * FROM jornada ");
        return $consultalistaJornadas;
    }
    
    public function consultaCalendario() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaJornadas = $this->db->select("SELECT * FROM calendario ");
        return $consultalistaJornadas;
    }

    public function consultaEquipos() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaEquipos = $this->db->select("SELECT * FROM equipo ");
        return $consultalistaEquipos;
    }

}

?>
