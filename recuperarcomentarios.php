<html>
    <head>
        <meta charset="UTF-8">
        <title>Comentarios</title>
        <link rel="stylesheet" href="estilos.css">
        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar; text-indent:1cm}
	</STYLE>
    </head>
    <body>
        <div class=registro style="height: 300px; width: 400px; left: 500px; top: 200px; position: absolute; text-align: center;">
        <?php
        session_start();
        include ("MysqlConn.php");
        $conexion = conectar();
        $n=$_SESSION["usuario"];
        $t=$_SESSION["tema"];
        $e=$_GET['comentario'];
        $sqli= "SELECT * FROM comentarios";
        $result1 = $conexion->query($sqli);
        //verificamos si envio algo en los campos y si los mando los datos los registramos en la base de datos
        if(!empty($_GET['comentario'])){
            //Aqui estamos cambiando el comentrario a el tema que seleccionamos anteriormente
            $sql = "INSERT INTO comentarios (comentario,tema,nombre)".
                "VALUES ('$e','$t','$n')";
            if ($conexion->query($sql) == true) {
                echo '<script type="text/javascript"> window.location.href="mostrarproducto.php?tema=', $_SESSION['tema'], '"</script>';
            } 
            else {
                echo "Error: " .$sql . "<br>" . $conexion->error;
            }
        }
        else{
            echo'<script type="text/javascript"> alert("No agregaste ningún comentario.");
            </script>';
        }
        mysqli_close($conexion);
        ?>
        <p><a href="mostrarproducto.php?<?php echo 'tema=', $_SESSION['tema']; ?> ">VOLVER A LA SECCIÓN DE COMENTARIOS </a></p>
        </div>
    </body>
</html>

