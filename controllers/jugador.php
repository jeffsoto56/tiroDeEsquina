<?php
class Jugador extends Controllers {
    function __construct(){
        parent::__construct();
    }
    function agregarJugador(){
        $this->view->title = 'Mantenimiento de Jugadores'; 
        $this->view->render('header');
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
        $this->view->render('jugador/verJugador');
        $this->view->render('footer');
    }
    function guardarJugador(){
        $datos = array();
        $datos['txt_idJugador']=$_POST['txt_idJugador'];
        $datos['txt_nombreJugador']=$_POST['txt_nombreJugador'];
        $datos['txt_posicion']=$_POST['txt_posicion'];
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
        $this->model->actualizarJugador($datos);
        header("Location: ". URL. "jugador/verJugador");
    }
    function eliminarJugador($id){
        $this->view->title = 'Mantenimiento de Jugador'; 
        $this->model->eliminarJugador($id);
        header("Location: ". URL. "jugador/verJugador");
    }
    
}
?>
