<?php
    //require 'src/render.php';
    //echo render ('logout');
    session_destroy();

    if (isset($_COOKIE['key'])) {
        unset($_COOKIE['cookie_name']);
        unset($_COOKIE['cookie_email']);
        setcookie('', '', time() - 3600, '/'); 
    }

    header('Location:?url=home');