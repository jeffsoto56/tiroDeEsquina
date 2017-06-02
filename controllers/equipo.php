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
        echo 'Guardando equipo';
    echo 'Equipo guardado'.$_POST['txt_nombreEquipo'];
    }
    function run(){
        //llama a la funcion run() de login_model
        $this->model->run();
    }
}
?>
