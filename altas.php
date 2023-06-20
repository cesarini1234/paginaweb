<?php
//Si inicia sesion mandara al usuario directamente al menu y no lo dejara entrar aqui
session_start();
if(isset($_SESSION['iniciosesion1'])){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link rel="stylesheet" href="estilos2.css">
<!--        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar;}
	</STYLE>-->
    </head>
    <body>
        <!-- Titulo -->
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">REGISTRO</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
        <div class=registro style="height: 300px; width: 400px; left: 500px; top: 200px; position: absolute; text-align: center;">
        <p>
            <strong>¡Hola!, registra a un usuario</strong>
        </p>
        <!-- Enviamos los datos a donde lo registrara en la base de datos -->
        <form action="recuperaraltas.php" method="get">
            Nombres: <input type="text" required name="nombre"><br><br>
            Apellidos: <input type="text" required name="apellidos"><br><br>
            Fecha de nacimiento: <input type="text" required name="nacimiento"><br><br>
            Telefono: <input type="text" required name="telefono"><br><br>
            Correo: <input type="text" required name="correo"><br><br>
            Contraseña: <input type="password" required name="contraseña"><br><br>
            Calle: <input type="text" required name="calle"><br><br>
            Colonia:<input type="text" required name="colonia"><br><br>
            Ciudad:<input type="text" required name="ciudad"><br><br>
            Estado:<input type="text" required name="estado"><br><br>
            Color de preferencia de sudadera: <input type="text" required name="preferencias"><br><br>
            <input type="submit" value="Enviar">
        </form>
        </div>
         <div style="height: 300px; width: 400px; left: 750px; top: 800px; position: absolute; z-index: 10; font-size: 14pt; text-align: justify;">
             <form action="menuadmin.php">
        <input type="submit" value="Menu">
        </form>
             <?php
            }
             ?>
        </div>
    </body>
</html>
