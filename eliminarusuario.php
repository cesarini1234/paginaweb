<?php
//si no inicia sesion este lo mandara a que se registre
session_start();
if(!isset($_SESSION['iniciosesion1'])){
    header("Location:registro.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Eliminar Usuario</title>
        <link rel="stylesheet" href="estilos2.css">
    </head>
    <body>
        <!-- TITULO -->
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">ELIMINAR USUARIO</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 150px; position: absolute; z-index: 10; text-align: justify;">
        <p>
        <form name='form1' method='get' enctype="multipart/form-data" action='recuperareliminarusuario.php'>
            <!-- Aqui pido que coloque el tema que se eliminara y lo enviamos-->
          <table border='1' aling='center'>
                <tr>
                    <td colspan='2'><p aling='center'>Eliminar Usuario</p></td>
                </tr>
                <tr>
                    <td>Id del usuario que desea Eliminar</td>
                    <td><input name='idusuario' type='text' id='idusuario'></td>
                </tr>
                <tr>
                    <td><input name='Aceptar' type='submit' id="Aceptar" value="Aceptar"></td>
                    <td><input type='reset' name='Submit2' value="Restablecer"></td>       
                </tr>
            </table>
        </form>
            <div style="height: 30px; width: 40px; left: 400px; top: 100px; position: absolute; z-index: 10; font-size: 14pt; text-align: justify;">
            <form action="menuadmin.php">
        <input type="submit" value="Menu">
        </form>
        </div>
</select>
    </body>
</html>
