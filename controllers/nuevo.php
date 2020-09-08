<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarCategorias(){

        $cateId = $_POST['cateId'];
        $cateNomb    = $_POST['cateNomb'];
        $cateFech  = $_POST['cateFech'];
        $cateInact  = $_POST['cateInact'];


        $mensaje = "";

        if($this->model->insert(['cateId' => $cateId, 'cateNomb' => $cateNomb, 'cateFech' => $cateFech, 'cateInact' => $cateInact])){
            $mensaje = "Registro exitoso";
        }else{
            $mensaje = "La matrícula ya existe";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>