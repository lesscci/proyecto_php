<?php
    require 'src/db.php';
    //agafa $_request[email] i pass
    //comprova si existeixen a la base de datos
    // tenim dos possib
    //1.Existen => dashboard y abrimos sesion usuario
    //2.no exis => pal home o nos quedamos en login
    //echo "aaaa";


    if(!empty($_POST['email'])
        &&!empty($_POST['password'])
            &&!empty($_POST['username'])){

        if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])){
            
            $email= $_REQUEST['email'];
            $password=$_REQUEST['password'];
            $username=$_REQUEST['username'];

            $passwordCrypt= password_hash($password,PASSWORD_DEFAULT);
            $con = mysqli_connect('localhost', 'school', 'linuxlinux', 'SCHOOL');
            $sql = "Insert into users (username, email, password) VALUES ('$username','$email','$passwordCrypt')";
            mysqli_query($con, $sql) or die();
            
            $_SESSION['user']=$username;


            $cookie_name = $username;
            $cookie_email = $email;
            setcookie($cookie_name, $cookie_email, time() + (86400 * 30), "/"); 
           
           
            header('Location:?url=dashboard');

        }

    } else{
        echo "Datos incorrectos";
       
    }