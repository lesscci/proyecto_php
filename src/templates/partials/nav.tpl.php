<nav>
    <?php

        if (!isset($_SESSION['user'])) {
            ?>
            <a href="?url=login">Login</a>
            <a href="?url=register">Registrarse</a>
            <?php } ?>

        <?php
            if (isset($_SESSION['user'])) {
                ?> 
                <a href="?url=logout"> Logout </a>
          
        <?php } ?> 


</nav>