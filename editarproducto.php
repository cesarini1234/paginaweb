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
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">EDITAR PRODUCTO</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 150px; position: absolute; z-index: 10; text-align: justify;">
        <p>
        <form name='form1' method='POST' enctype="multipart/form-data" action='recuperareditarproducto.php'>
          <?php
          //Aqui pido que escoja lo que desea cambiar y lo guardo en una variable
          $pregunta[0]="¿Que deseas cambiar? <br>";
          $respuestas[0]="<input type='radio' name='tipo' value='10'>Imagen</input>"
                  . "<input type='radio' name='tipo' value='20'>Precio</input>"
                  . "<input type='radio' name='tipo' value='30'>Color</input>"
                  . "<input type='radio' name='tipo' value='40'>Proveedor</input>"
                  . "<input type='radio' name='tipo' value='50'>Descripción</input>";           
          echo $pregunta[0];
          echo $respuestas[0];
          ?>
            <!-- Aqui pido que coloque por fuerza el id y ya coloque lo que desea en el campo que debe de cambiar -->
          <table border='1' aling='center'>
                <tr>
                    <td colspan='2'><p aling='center'>Coloque el Nombre del Producto y lo que desea Cambiar</p></td>
                </tr>
                <tr>
                    <td>Tema:</td>
                    <td><input name='tema' type='text' id='tema'></td>
                </tr>
                <tr>
                    <td>Imagen:</td>
                    <td><input type="file" name="imagen"'><br><br></td>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td><input name='precio' type='text' id='precio'></td>
                </tr>
                <tr>
                    <td>Color:</td>
                    <td><input name='color' type='text' id='color'></td>
                </tr>
                <tr>
                    <td>Proveedor:</td>
                    <td><input name='proveedor' type='text' id='proveedor'></td>
                </tr>
                <tr>
                    <td>Descripción:</td>
                    <td><input name='descripcion' type='text' id='descripcion'></td>
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
