<?php
    session_start();
    define('APP',__DIR__);
    //configuració entorn
    require 'config.php';
    require 'src/router.php';
    require 'src/routes.php';
    //rutas de la web
    $controlador = getRouter($routes);
    //llama al controlador
    require 'src/controllers/'.$controlador.'.php';
    