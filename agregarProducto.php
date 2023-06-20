<?php
//si no inicia sesion este lo mandara a que inicie la sesion
session_start();
if(!isset($_SESSION['iniciosesion1'])){
    header("Location:registro.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Producto</title>
        <link rel="stylesheet" href="estilos2.css">
    </head>
    <body>
        <!-- TITULO -->
        <p ALIGN=CENTER><b><FONT SIZE=12; FACE="Copperplate">AGREGAR PRODUCTO</FONT></b></p>
		<HR noshade size=10px width=100% color=#FFF707>
		
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 150px; position: absolute; z-index: 10; text-align: justify;">

        <!-- Recibimos El tema y la consulta que queremos agregar -->
        <form action="recuperarAgregarProducto.php" method="POST" enctype="multipart/form-data">
            Nombre producto: <input required type="text" name="nombre"><br><br>
            Descripcion producto: <input required type="text" name="tema"><br><br>
            Color del producto: <input required type="text" name="color"><br><br>
            Precio del producto: <input required type="text" name="precio"><br><br>
            Proveedor del producto: <input required type="text" name="proveedor"><br><br>
            <input type="file" required name="imagen"><br><br>
            <input type="submit" value="Agregar Producto">
        </form>
        <div style="height: 30px; width: 40px; left: 380px; top: 300px; position: absolute; z-index: 10; font-size: 14pt; text-align: justify;">
            <form action="menuadmin.php">
        <input type="submit" value="Menu">
        </form>
        </div>
    </body>
</html>
