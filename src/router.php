<?php
    include 'routes.php';

    //esta función recorre nuestras rutas especificadas en routes.php
    // si no devuelve error
    function getRouter(array $routes):string{
        if(isset($_REQUEST['url'])){
            $url = $_REQUEST['url'];
        }else{
            $url = 'home';
        }

        if(in_array($url,(array)$routes)){
            return $url;
        }else{
            return 'error';
        }
        
    }