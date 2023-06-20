<?php 
        session_start();
        $_SESSION["tema"]=$_GET["tema"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comentar</title>
        <link rel="stylesheet" href="estilos4.css">
    </head>
    <body>
                     <STYLE type="text/css">
		BODY {color:blue;background-color: #EEEEEE;}
                     </STYLE>
                     
        <div id="contenedor">
        <form action="recuperarcomentarios.php" method="get">
            Comentario: <textarea id="comentario" name="comentario"  rows="20" cols="60"></textarea>
            <input type="submit" value="Comentar">
        </form>
        <form action="tienda.php">
        <input type="submit" value="Regresar">
        </form>
        </div>
    </body>
</html>