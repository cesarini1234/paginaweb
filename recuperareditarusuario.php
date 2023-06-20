<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambios</title>
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
        $i=$_GET['idUsuario'];
        $u=$_GET['correo'];
        $e=$_GET['contraseña'];
        $c= $e;
        $l=$_GET['nombre'];
        $f=$_GET['Apellido'];
        $p=$_GET['preferencia'];
        $ca=$_GET['calle'];
        $ci=$_GET['ciudad'];
        $co=$_GET['colonia'];
        $es=$_GET['estado'];
        $na=$_GET['nacimiento'];
        $t=$_GET['telefono'];
        $pregunta=$_GET['tipo'];
        //Conecta al servidor Mysql 
        include ("MysqlConn.php");
        $conexion = conectar();
       //Segun la opcion que haya elegido es el numero que se le da a la pregunta y se compara y ya tomamos los datos
       //Y lo cambiamos de la persona a la que le pertenezca el id
       if($pregunta==10){
            $sql = "UPDATE usuario SET correo='$u' WHERE idusuario=$i";
       }else if($pregunta==20){
           $sql = "UPDATE usuario SET contraseña='$c' WHERE idusuario=$i";
       }else if($pregunta==30){
           $sql = "UPDATE usuario SET nombre='$l' WHERE idusuario=$i";
       }else if($pregunta==40){
           $sql = "UPDATE usuario SET apellido='$f' WHERE idusuario=$i";
       }else if($pregunta==50){
           $sql = "UPDATE usuario SET nacimiento='$na' WHERE idusuario=$i";
       }else if($pregunta==60){
           $sql = "UPDATE usuario SET telefono='$t' WHERE idusuario=$i";
       }else if($pregunta==70){
           $sql = "UPDATE usuario SET calle='$ca' WHERE idusuario=$i";
       }else if($pregunta==80){
           $sql = "UPDATE usuario SET colonia='$co' WHERE idusuario=$i";
       }else if($pregunta==90){
           $sql = "UPDATE usuario SET ciudad='$ci' WHERE idusuario=$i";
       }else if($pregunta==100){
           $sql = "UPDATE usuario SET estado='$es' WHERE idusuario=$i";
       }else if($pregunta==110){
           $sql = "UPDATE usuario SET preferencia='$p' WHERE idusuario=$i";
       }
        if ($conexion->query($sql) == TRUE) {
                                    echo'<script type="text/javascript">
                   alert("La información ha sido actualizada.");
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

