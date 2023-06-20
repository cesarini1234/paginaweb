<?php
session_start();
if(!isset($_SESSION['iniciosesion1'])){
    header("Location:iniciosesion.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu usuario</title>
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

   <a href="altas.php" class="menu-item blue"><img src="altas.png" width="65px" height="65px"/></a>
   <a href="eliminarusuario.php" class="menu-item green"><img src="borrarusu.png" width="65px" height="65px"/></i> </a>
   <a href="editarusuario.php" class="menu-item red"> <img src="editarusuarios.png" width="55px" height="55px"/></i> </a>
   <a href="menuadmin.php" class="menu-item lightblue"><img src="menu.png"  width="45px" height="70px"/></i> </a>
   </nav>
        
    </body>
</html>
