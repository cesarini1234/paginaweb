<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminadar producto</title>
        <link rel="stylesheet" href="estilos.css">
        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar; text-indent:1cm}
	</STYLE>
    </head>
    <body>
        <!-- TITULO -->
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">ELIMINAR PRODUCTO</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
		<HR noshade size=10px width=100% color=#122079>
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 150px; position: absolute; z-index: 10; text-align: justify;">
        <p>
        <?php
        $i=$_GET['tema'];
        //Conecta al servidor Mysql 
        include ("MysqlConn.php");
        $conexion = conectar();
       //Segun el foro que nos de lo eliminamos
            $sql = "DELETE FROM productos WHERE tema='$i'";
       //Si colocamos un tema que esta nos dira que se elimino     
        if ($conexion->query($sql) == TRUE) {
                                   echo'<script type="text/javascript">
                   alert("Se elimino");
                    window.location.href="menuadmin.php";
                    </script>';
        } else {
        echo "Error updating record: " . $conexion->error;
        }
        mysqli_close($conexion);
        ?>
         
    </body>
</html>

