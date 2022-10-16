<?php
    //render template home
    require 'src/render.php';
    $title = "HOME";

    echo render('home',['title'=>$title]);