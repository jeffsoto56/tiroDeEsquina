<?php
Class Equipo_model extends Models{
    
    public function __construct() 
    {
        parent::__construct();
    }
    /* Inserta Equipo en la BD */
    public function guardarEquipo($datos){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaEquipo = $this->db->select("SELECT * FROM equipo "
                . "WHERE nombre = '" . $datos['txt_nombreEquipo'] . "' ");

        if ($consultaExistenciaEquipo != null) {
           
            echo 'Error Ya Existe con el mismo nombre';
           die;
        } else {
            
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('equipo', array(
                'nombre' => $datos['txt_nombreEquipo'],
                'escudo' => $datos['txt_escudo']));
            
    }
    
        }
        
        /* Inserta Equipo en la BD */
    public function listaEquipos(){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaEquipos = $this->db->select("SELECT * FROM equipo ");
        return $consultalistaEquipos;

        }
        
          public function datosEquipo($id){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaEquipo = $this->db->select("SELECT * FROM equipo "
                . "WHERE id = " . $id. " ");

        if ($consultaExistenciaEquipo != null) {
           
            
           return $consultaExistenciaEquipo;
        } else {
            
            //Sino Inserto datos de Pre-Matricula del Estudiante
             echo 'Error equipo no encontrado';
           die;
            
    }
    
        }
        public function actualizarEquipo($datos){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaEquipo = $this->db->select("SELECT * FROM Equipo "
                . "WHERE id = '" . $datos['idEquipo'] . "' ");

        if ($consultaExistenciaEquipo != null) {
            $posData = array(
                'nombre' => $datos['txt_nombreEquipo'],
                'escudo' => $datos['txt_escudo']
                );

            $this->db->update('equipo', $posData, "`id` = '{$datos['idEquipo']}'");
           
        } else {
            echo 'Error NO Existe Equipo';
           die;
            
            
        }
    
    }
        public function eliminarEquipo($id){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaEquipo = $this->db->select("SELECT * FROM Equipo "
                . "WHERE id = '" . $id['id'] . "' ");

        if ($consultaExistenciaEquipo != null) {
            $this->db->delete('equipo',"`id` = '{$id['id']}'");
           
        } else {
            echo 'Error NO Existe Equipo';
           die;
            
            
    }
    
    }
    public function consultaJugadores(){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaJugadores = $this->db->select("SELECT * FROM jugador ");
        return $consultalistaJugadores;

        }
        public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT * "
                . "FROM equipo "
                . "WHERE nombre = '" . $ced_estudiante . "'");

        echo json_encode($resultado);
    }

    } 


?>
