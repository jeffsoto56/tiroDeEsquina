<?php
class Jornada extends Controllers {
    function __construct(){
        parent::__construct();
    $this->view->js = array('jornada/js/jsJornada.js');
    }
    function agregarJornada(){
        $this->view->consultaEquipos =  $this->model->consultaEquipos();
        $this->view->title = 'Mantenimiento de jornada'; 
        $this->view->render('header');
        $this->view->render('jornada/agregarJornada');
        $this->view->render('footer');
    }
    function verJornada(){
        $this->view->title = 'Mantenimiento de jornada'; 
        $this->view->render('header');
        $this->view->listaJornadas =  $this->model->listaJornadas();
        $this->view->render('jordana/verJornada');
        $this->view->render('footer');
    }
    function guardarJornada(){
        $datos = array();
        $datos['idJornada']=$_POST['idJornada'];
        $datos['txt_equipoCasa']=$_POST['txt_equipoCasa'];
        $datos['txt_equipoVisita']=$_POST['txt_equipoVisita'];
        $this->model->guardarJornada($datos);
        header("Location: ". URL. "equipo/verJornada");
    }
    function editarJornada($id){
        $this->view->title = 'Mantenimiento de Jornada'; 
        $this->view->render('header');
        $this->view->datosJornadas =  $this->model->datosJornadas($id);
        $this->view->render('jornada/editarJornada');
        $this->view->render('footer');
    }
    function actualizarJornada(){
        $datos = array();
        $datos['idJornada']=$_POST['idJornada'];
        $datos['txt_equipoCasa']=$_POST['txt_equipoCasa'];
        $datos['txt_equipoVisita']=$_POST['txt_equipoVisita'];
        $this->model->actualizarJornada($datos);
        header("Location: ". URL. "jornada/verJornada");
    }
    function eliminarJornada($id){
        $this->view->title = 'Mantenimiento de jornada'; 
        $this->model->eliminarJornada($id);
        header("Location: ". URL. "jornada/verJornada");
    }
    
}
?>
