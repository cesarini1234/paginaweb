<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link rel="stylesheet" href="estilos.css">
        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar;}
	</STYLE>
    </head>
    <body>
        <div class=registro style="height: 300px; width: 400px; left: 500px; top: 200px; position: absolute; text-align: center;">
        <?php
        session_start();
        include ("MysqlConn.php");
        $conexion = conectar();
        $t=$_GET['telefono'];
        $e=$_GET['correo'];
        $l=$_GET['contraseña'];
        $n=$_GET['nombre'];
        $a=$_GET['apellidos'];
        $p=$_GET['preferencias'];
        $ca=$_GET['calle'];
        $ci=$_GET['ciudad'];
        $co=$_GET['colonia'];
        $es=$_GET['estado'];
        $na=$_GET['nacimiento'];
            //Aqui estamos insertando los datos con la contraseña incriptada por MD5
            $sql = "INSERT INTO usuario (correo,contraseña,nombre,apellido,preferencia,nacimiento,calle,colonia,ciudad,estado,telefono)".
                "VALUES ('$e', '$l','$n','$a','$p','$na','$ca','$co','$ci','$es',$t)";
            if ($conexion->query($sql) == true) {
                        echo'<script type="text/javascript">
                   alert("Registrado");
                    window.location.href="menuPrincipal.php";
                    </script>';
        } else {
            echo "Error: " .$sql . "<br>" . $conexion->error;
        }
        mysqli_close($conexion);
        ?>
        <p><a href="menuPrincipal.php">VOLVER AL MENU PRINCIPAL</a></p>
        </div>
    </body>
</html>