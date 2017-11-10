<?php
class Grupo extends Controllers {
    function __construct(){
        parent::__construct();
        $this->view->js = array('grupo/js/jsGrupo.js');


    }
    function agregarGrupo(){
        $this->view->title = 'Mantenimiento de grupos'; 
        $this->view->render('header');
        $this->view->render('grupo/agregarGrupo');
        $this->view->render('footer');
    }
    function verGrupo(){
        $this->view->title = 'Mantenimiento de grupos'; 
        $this->view->render('header');
        $this->view->listaGrupos =  $this->model->listaGrupos();
        $this->view->render('grupo/verGrupo');
        $this->view->render('footer');
    }
    function guardarGrupo(){
        $datos = array();
        $datos['txt_nombreGrupo']=$_POST['txt_nombreGrupo'];
        $this->model->guardarGrupo($datos);
        header("Location: ". URL. "grupo/verGrupo");
    }
    function guardarGrupo_equipo(){
        $datos = array();
        $datos['idEquipo']=$_POST['idEquipo'];
        $datos['idGrupo']=$_POST['idGrupo'];
        $this->model->guardarGrupo_equipo($datos);
        header("Location: ". URL. "grupo/verGrupo");
    }
    function editarGrupo($id){
        $this->view->title = 'Mantenimiento de grupo'; 
        $this->view->render('header');
        $this->view->datosGrupo =  $this->model->datosGrupo($id);
        $this->view->render('grupo/editarGrupo');
        $this->view->render('footer');
    }
    function actualizarGrupo(){
        $datos = array();
        $datos['idGrupo']=$_POST['idGrupo'];
        $datos['txt_nombreGrupo']=$_POST['txt_nombreGrupo'];
        $this->model->actualizarGrupo($datos);
        header("Location: ". URL. "grupo/verGrupo");
    }
    function eliminarGrupo($id){
        $this->view->title = 'Mantenimiento de grupos'; 
        $this->model->eliminarGrupo($id);
        header("Location: ". URL. "grupo/verGrupo");
    }
    function formarGrupo(){
        $this->view->title = 'Formacion de grupos'; 
        $this->view->render('header');
        $this->view->consultaEquipos =  $this->model->consultaEquipos();
        $this->view->consultaGrupos =  $this->model->consultaGrupos();
        
        $this->view->render('grupo/formarGrupo');
        $this->view->render('footer');
    }
    function buscarEstuRatif($ced_estudiante) {
        $this->model->buscarEstuRatif($ced_estudiante);
    }

}
?>
