c<?php

Class Calendario_model extends Models {

    public function __construct() {
        parent::__construct();
    }

    /* Inserta Equipo en la BD */

    public function guardarCalendario($datos) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaCalendario = $this->db->select("SELECT * FROM calendario "
                . "WHERE nombre = '" . $datos['txt_nombreCalendario']  . "' ");

        if ($consultaExistenciaCalendario != null) {

            echo 'Error Ya Existe Calendario';
            die;
        } else {

            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('calendario', array(
               
                
                'nombreCalendario' => $datos['txt_nombreCalendario']));
        }
    }

    /* Inserta Equipo en la BD */

    public function listaCalendario() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaCalendario = $this->db->select("SELECT * FROM calendario");
        return $consultalistaCalendario;
    }

    public function datosCalendario($id) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaCalendario = $this->db->select("SELECT * FROM calendario "
                . "WHERE id = " . $id . " ");

        if ($consultaExistenciaCalendario != null) {


            return $consultaExistenciaCalendario;
        } else {

            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error calendario no encontrada';
            die;
        }
    }

    public function actualizarCalendario($datos) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaCalendario = $this->db->select("SELECT * FROM calendario "
                 . "WHERE id = '" . $datos['idCalendario'] . "' ");

        if ($consultaExistenciaCalendario != null) {
            $posData = array(
               
                'nombreCalendario' => $datos['txt_nombreCalendario']
            );

            $this->db->update('calendario', $posData, "`id` = '{$datos['idCalendario']}'");
        } else {
            echo 'Error no existe Calendario';
            die;
        }
    }

    public function eliminarCalendario($id) {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaCalendario = $this->db->select("SELECT * FROM calendario "
                . "WHERE id = '" . $id['id'] . "' ");

        if ($consultaExistenciaCalendario != null) {
            $this->db->delete('calendario', "`id` = '{$id['id']}'");
        } else {
            echo 'Error NO Existe calendario';
            die;
        }
    }

    public function consultaCalendario() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaCalendario = $this->db->select("SELECT * FROM calendario ");
        return $consultalistaCalendario;
    }
        public function consultaEquipos() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaEquipos = $this->db->select("SELECT * FROM equipo ");
        return $consultalistaEquipos;
    }

     public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT * "
                . "FROM jornada "
                . "WHERE nombre LIKE '%" . $ced_estudiante . "%'");
        echo json_encode($resultado);
    }
      public function buscarJornadas($idCalendario) {
        $resultado = $this->db->select("SELECT * "
                . "FROM jornada "
                . "WHERE idCalendario = " . $idCalendario . "");
        echo json_encode($resultado);
    }
    
  

}

?>
