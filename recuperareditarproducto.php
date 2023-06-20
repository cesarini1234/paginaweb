<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar producto</title>
        <link rel="stylesheet" href="estilos.css">
        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar; text-indent:1cm}
	</STYLE>
    </head>
    <body>
        <!-- TITULO -->
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">CAMBIOS REALIZADOS</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
		<HR noshade size=10px width=100% color=#122079>
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 150px; position: absolute; z-index: 10; text-align: justify;">
        <p>
        <?php
        date_default_timezone_set('UTC');
        $p=$_POST['color'];
        $e=$_POST['tema'];
        $pr=$_POST['precio'];
        $pregunta=$_POST['tipo'];
        $pv=$_POST['proveedor'];
        $des=$_POST['descripcion'];
        //Conecta al servidor Mysql     
        include ("MysqlConn.php");
        $conexion = conectar();
       //Segun la opcion que haya elegido es el numero que se le da a la pregunta y se compara y ya tomamos los datos
       //Y lo cambiamos de la persona a la que le pertenezca el id
       if($pregunta==10){
            $i = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $sql = "UPDATE productos SET imagen='$i' WHERE tema='$e'";
       }else if($pregunta==20){
           $sql = "UPDATE productos SET precio='$pr' WHERE tema='$e'";
       }else if($pregunta==30){
           $sql = "UPDATE productos SET descripcion='$p' WHERE tema='$e'";
       }else if($pregunta==40){
           $sql = "UPDATE productos SET proveedor='$pv' WHERE tema='$e'";
       }else if($pregunta==50){
           $sql = "UPDATE productos SET nombre='$des' WHERE tema='$e'";
       }
        if ($conexion->query($sql) == TRUE) {
                                    echo'<script type="text/javascript">
                   alert("Se realizo el cambio");
                    window.location.href="menuadmin.php";
                    </script>';
        } else {
        echo "Error updating record: " . $conexion->error;
        }
        mysqli_close($conexion);
        ?>
        <p><a href="menuadmin.php">VOLVER AL MENU PRINCIPAL</a></p>
    </body>
</html>

