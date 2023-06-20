
<?php
//Si inicia sesion mandara al usuario directamente al menu y no lo dejara entrar aqui
session_start();
if(isset($_SESSION['iniciosesion'])){
    header("Location:menuPrincipal.php");
}else{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar sesion</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>SUDADERA <span>TIRA</span></div>
		</div>
                <div class="login" style="position: absolute;">
               <!-- Aqui recibimos lo que agregara el usuario y lo mandaremos a una pagina donde checara si ya se registro anteriormente -->
        <form action="recuperarInicioSesion.php" method="get">
             <input type="text" placeholder="Correo" required name="correo"><br><br>
            <input type="password" placeholder="Contraseña" required name="contraseña"><br><br>
            <input type="submit"  value="Entrar">
        </form>
        <form action="menuPrincipal.php">
        <input type="submit" value="Menu">
        </form>
       <form action="registro.php">
        <input type="submit" value="Registrarte">
        </form>
                </div>
         <?php
        }
        ?>
    </body>
</html>