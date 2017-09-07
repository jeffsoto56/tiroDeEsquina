<?php
class Jugador extends Controllers {
    function __construct(){
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = array('jugador/js/jsJugador.js');


    }
    function agregarJugador(){
        $this->view->title = 'Mantenimiento de Jugadores'; 
        $this->view->render('header');
        $this->view->consultaNiveles = $this->model->consultaNiveles();
        $this->view->consultaEquipos =  $this->model->consultaEquipos();
        $this->view->consultaPosiciones =  $this->model->consultaPosiciones();
        $this->view->render('jugador/agregarJugador');
        $this->view->render('footer');
    }
    function verJugador(){
        $this->view->title = 'Mantenimiento de Jugadores'; 
        $this->view->render('header');
        $this->view->consultaJugadores =  $this->model->consultaJugadores();
         $this->view->consultaPosiciones =  $this->model->consultaPosiciones();
         $this->view->consultaEquipos =  $this->model->consultaEquipos();
        $this->view->render('jugador/verJugador');
        $this->view->render('footer');
    }
    function guardarJugador(){
        $datos = array();
        $datos['txt_idJugador']=$_POST['txt_idJugador'];
        $datos['txt_nombreJugador']=$_POST['txt_nombreJugador'];
        $datos['txt_posicion']=$_POST['txt_posicion'];
        $datos['txt_equipo']=$_POST['txt_equipo'];
        $this->model->guardarJugador($datos);
        header("Location: ". URL. "jugador/verJugador");
        
    }
    function editarJugador($id){
        $this->view->title = 'Mantenimiento de Jugador'; 
        $this->view->render('header');
        $this->view->datosJugador =  $this->model->datosJugador($id);
        $this->view->consultaPosiciones =  $this->model->consultaPosiciones();
        $this->view->render('jugador/editarJugador');
        $this->view->render('footer');
    }
    function actualizarJugador(){
        $datos = array();
        $datos['idJugador']=$_POST['idJugador'];
        $datos['txt_nombreJugador']=$_POST['txt_nombreJugador'];
        $datos['txt_posicion']=$_POST['txt_posicion'];
        $datos['txt_equipo']=$_POST['txt_equipo'];
        $this->model->actualizarJugador($datos);
        header("Location: ". URL. "jugador/verJugador");
    }
    function eliminarJugador($id){
        $this->view->title = 'Mantenimiento de Jugador'; 
        $this->model->eliminarJugador($id);
        header("Location: ". URL. "jugador/verJugador");
    }
    function buscarEstuRatif($ced_estudiante) {
        $this->model->buscarEstuRatif($ced_estudiante);
    }
    function cargaGrupos($idNivel) {
        $this->model->cargaGrupos($idNivel);
    }

    
    function cargaSeccion() {
        $consulta = array();
        $consulta['nivelSeleccionado'] = $_POST['nivelSeleccionado'];
        $consulta['grupoSeleccionado'] = $_POST['grupoSeleccionado'];
        $this->model->cargaSeccion($consulta);
    }

    
}
?>
