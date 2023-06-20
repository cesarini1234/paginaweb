<?php
session_start();
if(!isset($_SESSION['iniciosesion1'])){
    header("Location:iniciosesion.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MENU ADMIN</title>
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

   <a href="menueditarusuario.php" class="menu-item blue"><img src="editarusu.png" width="65px" height="65px"/></a>
   <a href="menueditarproducto.php" class="menu-item red"><img src="editarpro.png"  width="70px" height="70px"/></i> </a>
    <a href="index.php" class="menu-item purple"> <img src="chat.png" width="60px" height="60px"/></i> </a>
   <a href="cerrarsesion.php" class="menu-item lightblue"><img src="cerrar.png"  width="45px" height="45px"/></i> </a>
   <a href="https://www.facebook.com/Sudaderas-Tira-112382951217706/" class="menu-item orange"><img src="face.png" width="50px" height="50px"/></i> </a>
</nav>
        
    </body>
</html>

