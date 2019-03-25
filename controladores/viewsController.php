<?php

    require_once "modelos/viewsModels.php";
    class viewsController extends viewsModels{

        public function obt_plantilla_controller(){
            return require_once "./vistas/plantilla.php";
        }

        
    }