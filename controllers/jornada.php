<?php

class Jornada extends Controllers {

    function __construct() {
        parent::__construct();
       
        $this->view->js = array('jornada/js/jsJornada.js');
       

    }

    function agregarJornada() {
        $this->view->consultaEquipos = $this->model->consultaEquipos();
        $this->view->title = 'Mantenimiento de jornada';
        $this->view->render('header');
        $this->view->consultaCalendario = $this->model->consultaCalendario();
        $this->view->render('jornada/agregarJornada');
        $this->view->render('footer');
    }

    function verJornada() {
        $this->view->listaJornadas = $this->model->listaJornadas();
        $this->view->consultaEquipos = $this->model->consultaEquipos();
        $this->view->listaCalendario =  $this->model->listaCalendario();
        $this->view->consultaCalendario = $this->model->consultaCalendario();
        $this->view->title = 'Mantenimiento de jornada';
        $this->view->render('header');
        $this->view->render('jornada/verJornada');
        $this->view->render('footer');
    }

    function guardarJornada() {
        $datos = array();
        $datos['txt_nombreCalendario'] = $_POST['txt_nombreCalendario'];
        $datos['txt_equipoCasa'] = $_POST['txt_equipoCasa'];
        $datos['txt_equipoVisita'] = $_POST['txt_equipoVisita'];
        $datos['txt_fechaJornada'] = $_POST['txt_fechaJornada'];
        $this->model->guardarJornada($datos);
        header("Location: " . URL . "jornada/verJornada");
    }

    function editarJornada($id) {
        $this->view->title = 'Mantenimiento de Jornada';
        $this->view->render('header');
        $this->view->datosJornadas = $this->model->datosJornadas($id);
        $this->view->consultaEquipos = $this->model->consultaEquipos();
        $this->view->consultaCalendario = $this->model->consultaCalendario();
        $this->view->render('jornada/editarJornada');
        $this->view->render('footer');
    }

    function actualizarJornada() {
        $datos = array();
        $datos['idJornada'] = $_POST['idJornada'];
        $datos['txt_nombreCalendario'] = $_POST['txt_nombreCalendario'];
        $datos['txt_equipoCasa'] = $_POST['txt_equipoCasa'];
        $datos['txt_equipoVisita'] = $_POST['txt_equipoVisita'];
        $datos['txt_fechaJornada'] = $_POST['txt_fechaJornada'];
        $this->model->actualizarJornada($datos);
        header("Location: " . URL . "jornada/verJornada");
    }

    function eliminarJornada($id) {
        $this->view->title = 'Mantenimiento de jornada';
        $this->model->eliminarJornada($id);
        header("Location: " . URL . "jornada/verJornada");
    }

}

?>
