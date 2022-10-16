<?php
    include 'partials/header.tpl.php';
    include 'partials/nav.tpl.php';
?>

    <div id="login">
        <form action="?url=logaction" method="POST">
            <input type="email" name="email" id="" placeholder="Correo eléctronico">
            <input type="password" name="password" id="" placeholder="Contraseña">
            <input type="checkbox" name="remember" <?php if(isset($_COOKIE["usuario_login"])) { ?> checked <?php } ?> />
            <button type="submit">Entrar</button>
    </div>
    
</body>
</html>