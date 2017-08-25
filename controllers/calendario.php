<?php
class Calendario extends Controllers {
    function __construct(){
        parent::__construct();

    }
    function agregarCalendario(){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->view->render('header');
        $this->view->render('calendario/agregarCalendario');
        $this->view->render('footer');
    }
    function verCalendario(){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->view->render('header');
        $this->view->listaCalendario =  $this->model->listaCalendario();
        $this->view->render('calendario/verCalendario');
        $this->view->render('footer');
    }
    function guardarCalendario(){
        $datos = array();
        
        $datos['txt_nombreCalendario']=$_POST['txt_nombreCalendario'];
        $this->model->guardarCalendario($datos);
        header("Location: ". URL. "calendario/verCalendario");
        
    }
    function editarCalendario($id){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->view->render('header');
        $this->view->datosCalendario =  $this->model->datosCalendario($id);
        $this->view->render('calendario/editarCalendario');
        $this->view->render('footer');
    }
    function actualizarCalendario(){
        $datos = array();
        $datos['idCalendario']=$_POST['idCalendario'];
        $datos['txt_nombreCalendario']=$_POST['txt_nombreCalendario'];
        $this->model->actualizarCalendario($datos);
        header("Location: ". URL. "calendario/verCalendario");
    }
    function eliminarCalendario($id){
        $this->view->title = 'Mantenimiento de Calendario'; 
        $this->model->eliminarCalendario($id);
        header("Location: ". URL. "calendario/verCalendario");
    }
    
}
?>
