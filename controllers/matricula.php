<?php

class Reglamento extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = array('reglamento/js/default.js', 'matricula/js/jsNuevoIngreso.js');
    }

    function datosSistemaJavaScript() {
        echo json_encode($this->model->datosSistema());
    }

    function index() {
        $this->view->title = 'Reglamento';
        $this->view->datosSistema = $this->model->datosSistema();
        $this->view->render('header');
        $this->view->render('reglamento/index');
        $this->view->render('footer');
    }

   

    function prematricula() {
        $this->view->title = 'Pre-Matricula';

        /* CARGAMOS TODAS LAS PROVINCIAS */
        $this->view->consultaProvincias = $this->model->consultaProvincias();

        /* CARGAMOS TODAS LAS PROVINCIAS */
        $this->view->consultaEscuelasPrematricula = $this->model->consultaEscuelasPrematricula();

        $this->view->render('header');
        $this->view->render('matricula/prematricula');
        $this->view->render('footer');
    }

    function editarMatricula($cedulaEstudiante) {
        $this->view->title = 'Editar matrícula';
        $this->view->datosSistema = $this->model->datosSistema();

    }
}

?>
