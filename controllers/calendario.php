<?php
class Calendario extends Controllers {
    function __construct(){
        parent::__construct();
    }
    function agregarCalendario(){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->view->render('header');
        $this->view->consultaCalendario =  $this->model->consultaCalendario();
        $this->view->consultaCalendario =  $this->model->consultaCalendario();
        $this->view->render('calendario/agregarcalendario');
        $this->view->render('footer');
    }
    function verCalendario(){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->view->render('header');
        $this->view->consultaCalendario =  $this->model->consultaCalendario();
         $this->view->consultaCalendario =  $this->model->consultaCalendario();
        $this->view->render('calendario/verCalendario');
        $this->view->render('footer');
    }
    function guardarCalendario(){
        $datos = array();
        $datos['txt_idJugador']=$_POST['txt_idJugador'];
        $datos['txt_nombreJugador']=$_POST['txt_nombreJugador'];
        $datos['txt_posicion']=$_POST['txt_posicion'];
        $this->model->guardarCalendario($datos);
        header("Location: ". URL. "jugador/verJugador");
        
    }
    function editarCalendario($id){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->view->render('header');
        $this->view->datosCalendario =  $this->model->datosCalendario($id);
        $this->view->consultaCalendario =  $this->model->consultaCalendario();
        $this->view->render('calendario/editarCalendario');
        $this->view->render('footer');
    }
    function actualizarCalendario(){
        $datos = array();
        $datos['idJugador']=$_POST['idJugador'];
        $datos['txt_nombreJugador']=$_POST['txt_nombreJugador'];
        $datos['txt_posicion']=$_POST['txt_posicion'];
        $this->model->actualizarCalendario($datos);
        header("Location: ". URL. "jugador/verJugador");
    }
    function eliminarCalendario($id){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->model->eliminarCalendario($id);
        header("Location: ". URL. "calendario/verCalendario");
    }
    
}
?>
