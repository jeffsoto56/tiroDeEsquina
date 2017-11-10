<?php
Class Grupo_model extends Models{
    
    public function __construct() 
    {
        parent::__construct();
    }
    /* Inserta Equipo en la BD */
    public function guardarGrupo($datos){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaGrupo = $this->db->select("SELECT * FROM grupo "
                . "WHERE nombre = '" . $datos['txt_nombreGrupo'] . "' ");

        if ($consultaExistenciaGrupo != null) {
           
            echo 'Error Ya Existe con el mismo nombre';
           die;
        } else {
            
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('grupo', array(
                'nombre' => $datos['txt_nombreGrupo'],
                ));
            
    }
    
        }
        public function guardarGrupo_equipo($datos){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaGrupo = $this->db->select("SELECT * FROM equipo_grupo "
                . "WHERE idEquipo = '" . $datos['idEquipo'] . "' ");

        if ($consultaExistenciaGrupo != null) {
           
            echo 'Error, equipo ya ingresado anteriormente';
           die;
        } else {
            
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('equipo_grupo', array(
                'idEquipo' => $datos['idEquipo'],
                'idGrupo' => $datos['idGrupo'],
                ));
            
    }
    
        }
        
        /* Inserta Equipo en la BD */
           
    public function listaGrupos(){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaGrupos = $this->db->select("SELECT * FROM grupo ");
        return $consultalistaGrupos;

        }
        public function consultaEquipos() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaEquipos = $this->db->select("SELECT * FROM equipo ");
        return $consultalistaEquipos;
    }
    
    public function consultaGrupos() {

        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultalistaEquipos = $this->db->select("SELECT * FROM grupo ");
        return $consultalistaEquipos;
    }
        
          public function datosGrupo($id){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaGrupo = $this->db->select("SELECT * FROM grupo "
                . "WHERE id = " . $id. " ");

        if ($consultaExistenciaGrupo != null) {
           
            
           return $consultaExistenciaGrupo;
        } else {
            
            //Sino Inserto datos de Pre-Matricula del Estudiante
             echo 'Error grupo no encontrado';
           die;
            
    }
    
        }
        public function actualizarGrupo($datos){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaGrupo = $this->db->select("SELECT * FROM Grupo "
                . "WHERE id = '" . $datos['idGrupo'] . "' ");

        if ($consultaExistenciaGrupo != null) {
            $posData = array(
                'nombre' => $datos['txt_nombreGrupo'],
                );

            $this->db->update('grupo', $posData, "`id` = '{$datos['idGrupo']}'");
           
        } else {
            echo 'Error NO Existe grupo';
           die;
            
            
        }
    
    }
        public function eliminarGrupo($id){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaGrupo = $this->db->select("SELECT * FROM Grupo "
                . "WHERE id = '" . $id['id'] . "' ");

        if ($consultaExistenciaGrupo != null) {
            $this->db->delete('grupo',"`id` = '{$id['id']}'");
           
        } else {
            echo 'Error NO Existe Grupo';
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
