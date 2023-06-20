<?php
//Si inicia sesion mandara al usuario directamente al menu y no lo dejara entrar aqui
session_start();
if(isset($_SESSION['iniciosesion'])){
    header("Location:menuPrincipal.php");
}else{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="body"></div>
		<div class="grad"></div>
                <div class="header">
			<div>Registro</div>
		</div>
                
        <div class="login">
            <!-- Enviamos los datos a donde lo registrara en la base de datos -->
            <div> 
                <form action="recuperarRegistro.php" method="get">
                    <input type="text" placeholder="Nombres" required name="nombre"><br><br>
                    <input type="text" placeholder="Apellidos" required name="apellidos"><br><br>
                    <input type="text" placeholder="Fecha de Nacimiento" required name="nacimiento"><br><br>
                    <input type="text" placeholder="Telefono" required name="telefono"><br><br>
                    <input type="text" placeholder="Correo" required name="correo"><br><br>
                    <input type="password" placeholder="Contraseña" required name="contraseña"><br><br>
                    <input type="text" placeholder="Calle" required name="calle"><br><br>
                    <input type="text" placeholder="Colonia" required name="colonia"><br><br>
                    <input type="text" placeholder="Ciudad" required name="ciudad"><br><br>
                    <input type="text" placeholder="Estado" required name="estado"><br><br>
                    <input type="text" placeholder="Color de Sudadera" required name="preferencias"">
                    <input type="submit" value="Enviar" style="display: inline; width: 150px">
                    <input type="submit" value="Menu" style="display: inline; width: 150px" form="regresar">
                </form>
                
                <form id="regresar" action="menuPrincipal.php"> </form>
            </div>
        </div>
        <?php
        }
        ?>
    </body>
</html>