<?php
    function connectMysql(string $dsn,string $dbuser,string $dbpass){
        try{
        $db = new PDO($dsn, $dbuser, $dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            }catch(PDOException $e){
            die( $e->getMessage() );
            }
                return $db;
    }

   /***************************************************** */
    
    function auth(PDO $db, string $email, string $password):bool
    {
        //$stmt=$db->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
        //$res=$stmt->execute([':email'=>$email]);

        $con = mysqli_connect('localhost', 'school', 'linuxlinux', 'SCHOOL');
        $sql = "select * from users where email = '$email' LIMIT 1";
        $res = mysqli_query($con, $sql);
        $filas = mysqli_num_rows($res);
        $user=mysqli_fetch_array($res);
    
        if ($filas==1) {
            if (password_verify($password, $user[3])) {
                return true;
            } else {
                echo 'Se ha producido un error';
                return false;
            }
        }
        else{
            echo 'Se ha producido un error';
            return false;
        }
}


?>