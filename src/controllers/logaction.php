<?php
    require 'src/db.php';
    
    //agafa $_request[email] i pass
    //comprova si existeixen a la base de datos
    // tenim dos possib
    //1.Existen => dashboard y abrimos sesion usuario
    //2.no exis => pal home o nos quedamos en login

    //die($dsn);
    $db=connectMysql($dsn,$dbuser,$dbpass);
    
    if(!empty($_POST['email'])
        &&!empty($_POST['password'])){
        
            if(isset($_POST['email']) 
                && isset($_POST['password'])){
                    $email= $_REQUEST['email'];
                    $password=$_REQUEST['password'];


                        if (auth($db, $email, $password)) {
                            header('Location:?url=dashboard');

                    } else {
                        header('Location:?url=login');
                    }
                    
                }

    }

    else{
        echo "Se ha producido un error";
    }