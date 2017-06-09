<?php
Class Equipo_model extends Models{
    
    public function __construct() 
    {
        parent::__construct();
    }
    /* Inserta Equipo en la BD */
    public function guardarEquipo($datos){

         //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaEquipo = $this->db->select("SELECT * FROM Equipo "
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
}

?>
