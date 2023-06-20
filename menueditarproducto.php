<?php
session_start();
if(!isset($_SESSION['iniciosesion1'])){
    header("Location:iniciosesion.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu producto</title>
         <link rel="stylesheet" href="estilos2.css">
    </head>
    <body>
        <nav class="menu">
   <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
   <label class="menu-open-button" for="menu-open">
    <span class="lines line-1"></span>
    <span class="lines line-2"></span>
    <span class="lines line-3"></span>
  </label>

<a href="agregarProducto.php" class="menu-item lightblue"><img src="agregarpro.png" width="80px" height="80px"/></i> </a>
<a href="editarproducto.php" class="menu-item red"><img src="editarusuarios.png"  width="60px" height="60px"/></i> </a>
   <a href="eliminarProducto.php" class="menu-item white"><img src="eliminarpro.png"  width="70px" height="70px"/></i> </a>
    <a href="menuadmin.php" class="menu-item lightblue"><img src="menu.png"  width="45px" height="70px"/></i> </a>
   </nav>
        
    </body>
</html>

