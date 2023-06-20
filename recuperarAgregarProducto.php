<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar producto</title>
        <link rel="stylesheet" href="estilos.css">
        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar;}
	</STYLE>
    </head>
    <body>
        <!-- TITULO -->
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">Agregar Producto</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
		<HR noshade size=10px width=100% color=#122079>
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 150px; position: absolute; z-index: 10; text-align: justify;">
        <p>
        <div class=registro style="height: 300px; width: 400px; left: 30px; top: 80px; position: absolute; text-align: center;">
        <?php
        session_start();
        include ("MysqlConn.php");
        $conexion = conectar();
        date_default_timezone_set('UTC');
        $n=$_POST['nombre'];
        $p=$_POST['color'];
        $e=$_POST['tema'];
        $pr=$_POST['precio'];
        $pv=$_POST['proveedor'];
        $i = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        //verificamos si envio algo en los campos y si los mando los datos los registramos en la base de datos
            //Aqui insertamos los datos del foro
            $sql = "INSERT INTO productos (nombre,descripcion,imagen,precio,tema,proveedor)".
                "VALUES ('$n','$p','$i','$pr','$e','$pv')";
            if ($conexion->query($sql) == true) {
            echo'<script type="text/javascript">
                   alert("Producto agregado");
                    window.location.href="menuadmin.php";
                    </script>';
        } else {
            echo "Error: " .$sql . "<br>" . $conexion->error;
        }
        mysqli_close($conexion);
        ?>
            <p><a href="menuadmin.php">VOLVER AL MENU PRINCIPAL</a></p>
        </div>
    </body>
</html>
