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
    function guardarEquipo(){
        $datos = array();
        $datos['txt_nombreEquipo']=$_POST['txt_nombreEquipo'];
        $datos['txt_escudo']=$_POST['txt_escudo'];
        $this->model->guardarEquipo($datos);
    }
    function run(){
        //llama a la funcion run() de login_model
        $this->model->run();
    }
}
?>
