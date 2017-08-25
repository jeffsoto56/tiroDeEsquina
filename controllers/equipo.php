<?php
class Equipo extends Controllers {
    function __construct(){
        parent::__construct();


    }
    function agregarEquipo(){
        $this->view->title = 'Mantenimiento de equipo'; 
        $this->view->render('header');
        $this->view->render('equipo/agregarEquipo');
        $this->view->render('footer');
    }
    function verEquipos(){
        $this->view->title = 'Mantenimiento de equipo'; 
        $this->view->render('header');
        $this->view->listaEquipos =  $this->model->listaEquipos();
        $this->view->render('equipo/verEquipos');
        $this->view->render('footer');
    }
    function guardarEquipo(){
        $datos = array();
        $datos['txt_nombreEquipo']=$_POST['txt_nombreEquipo'];
        $datos['txt_escudo']=$_POST['txt_escudo'];
        $this->model->guardarEquipo($datos);
        header("Location: ". URL. "equipo/verEquipos");
    }
    function editarEquipo($id){
        $this->view->title = 'Mantenimiento de equipo'; 
        $this->view->render('header');
        $this->view->datosEquipo =  $this->model->datosEquipo($id);
        $this->view->render('equipo/editarEquipo');
        $this->view->render('footer');
    }
    function actualizarEquipo(){
        $datos = array();
        $datos['idEquipo']=$_POST['idEquipo'];
        $datos['txt_nombreEquipo']=$_POST['txt_nombreEquipo'];
        $datos['txt_escudo']=$_POST['txt_escudo'];
        $this->model->actualizarEquipo($datos);
        header("Location: ". URL. "equipo/verEquipos");
    }
    function eliminarEquipo($id){
        $this->view->title = 'Mantenimiento de equipo'; 
        $this->model->eliminarEquipo($id);
        header("Location: ". URL. "equipo/verEquipos");
    }
    
}
?>
