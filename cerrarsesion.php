<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cerrar Sesion</title>
    </head>
    <body>
        <?php 
        if(isset($_SESSION['iniciosesion'])){
            unset($_SESSION['iniciosesion']);
            header("Location:menuPrincipal.php");
        }else if(isset($_SESSION['iniciosesion1'])){
            unset($_SESSION['iniciosesion1']);
            header("Location:menuPrincipal.php");
        }else {
            header("Location:iniciosesion.php");
        }
        ?>
        </div>
    </body>
</html>