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
        <title>Cambios</title>
        <link rel="stylesheet" href="estilos2.css">
    </head>
    <body>
        <!-- TITULO -->
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">CAMBIOS USUARIO</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
		<HR noshade size=10px width=100% color=#122079>
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 150px; position: absolute; z-index: 10; text-align: justify;">
        <p>
        <form name='form1' method='get' enctype="multipart/form-data" action='recuperareditarusuario.php'>
          <?php
          //Aqui pido que escoja lo que desea cambiar y lo guardo en una variable
          $pregunta[0]="¿Que deseas cambiar? <br>";
          $respuestas[0]="<input type='radio' name='tipo' value='10'>Correo</input>"
                  . "<input type='radio' name='tipo' value='20'>Contraseña</input>"
                  . "<input type='radio' name='tipo' value='30'>Nombre</input>"
                  . "<input type='radio' name='tipo' value='40'>Apellido</input>"
                  . "<input type='radio' name='tipo' value='50'>Fecha Nacimiento</input>"
                  . "<input type='radio' name='tipo' value='60'>Telefono</input>"
                  . "<input type='radio' name='tipo' value='70'>Calle</input>"
                  . "<input type='radio' name='tipo' value='80'>Colonia</input>"
                  . "<input type='radio' name='tipo' value='90'>Ciudad</input>"
                  . "<input type='radio' name='tipo' value='100'>Estado</input>"
                  . "<input type='radio' name='tipo' value='110'>Preferencia</input>";          
          echo $pregunta[0];
          echo $respuestas[0];
          ?>
            <!-- Aqui pido que coloque por fuerza el id y ya coloque lo que desea en el campo que debe de cambiar -->
          <table border='1' aling='center'>
                <tr>
                    <td colspan='2'><p aling='center'>Coloque el id y lo que va a cambiar</p></td>
                </tr>
                <tr>
                    <td>Id usuario</td>
                    <td><input name='idUsuario' type='text' id='idUsuario'></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input name='correo' type='text' id='correo'></td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input name='contraseña' type='text' id='contraseña'></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input name='nombre' type='text' id='nombre'></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input name='Apellido' type='text' id='Apellido'></td>
                </tr>
                <tr>
                    <td>Fecha Nacimiento</td>
                    <td><input name='nacimiento' type='text' id='nacimiento'></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input name='telefono' type='text' id='telefono'></td>
                </tr>
                <tr>
                    <td>Calle</td>
                    <td><input name='calle' type='text' id='calle'></td>
                </tr>
                <tr>
                    <td>Colonia</td>
                    <td><input name='colonia' type='text' id='colonia'></td>
                </tr>
                <tr>
                    <td>Ciudad</td>
                    <td><input name='ciudad' type='text' id='ciudad'></td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td><input name='estado' type='text' id='estado'></td>
                </tr>
                <tr>
                    <td>Preferencia</td>
                    <td><input name='preferencia' type='text' id='preferencia'></td>
                </tr>
                <tr>
                    <td><input name='Aceptar' type='submit' id="Aceptar" value="Aceptar"></td>
                    <td><input type='reset' name='Submit2' value="Restablecer"></td>       
                </tr>
            </table>
        </form>
        </select>
        <div style="height: 30px; width: 40px; left: 400px; top: 275px; position: absolute; z-index: 10; font-size: 14pt; text-align: justify;">
            <form action="menuadmin.php">
        <input type="submit" value="Menu">
        </form>
        </div>
    </body>
</html>