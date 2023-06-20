<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MENU PRINCIPAL</title>
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

   <a href="iniciosesion.php" class="menu-item blue"><img src="iniciar-sesion.png" width="65px" height="65px"/></a>
   <a href="registro.php" class="menu-item green"><img src="registrarse.png" width="60px" height="60px"/></i> </a>
   <a href="tienda.php" class="menu-item red"> <img src="tienda.png" width="60px" height="60px"/></i> </a>
   <a href="index.php" class="menu-item purple"> <img src="chat.png" width="60px" height="60px"/></i> </a>
   <a href="https://www.facebook.com/Sudaderas-Tira-112382951217706/" class="menu-item orange"><img src="face.png" width="50px" height="50px"/></i> </a>
   <a href="cerrarsesion.php" class="menu-item lightblue"><img src="cerrar.png"  width="45px" height="45px"/></i> </a>
</nav>

    </body>
</html>
