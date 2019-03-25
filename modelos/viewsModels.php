<?php

    class viewsModels{
        // En esta funcion va devolver si la palabra esta en la lista blanca
        protected function obt_views_models($viewss){
            $listWhite = ["admin","home","login","period","registration","representative",
            "salon","school","section","student","subject","teacher"];

            if(in_array($viewss,$listWhite)){
                if(is_file("./vistas/contenidos".$viewss."-view.php")){
                    $answerCont="./vistas/contenidos".$viewss."-view.php";
                }else{
                    $answerCont="login";
                }

            }elseif($viewss=="login"){
                $answerCont="login";

            }elseif($viewss=="index"){
                $answerCont="login";

            }else{
                $answerCont="login";
            }

            return $answerCont;
        }

        
    }