<?php
        session_start();
        include ("MysqlConn.php");
        if(!isset($_SESSION['iniciosesion']) && !isset($_SESSION['iniciosesion1'])){
    header("Location:iniciosesion.php");
        }else{
 ?>

 <!DOCTYPE html>
<html>
<head>
       <title>CHAT</title>
        <link  href="estilos4.css" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
             <STYLE type="text/css">
		BODY {color:blue;background-color: #EEEEEE;}
            </STYLE>
       <script type="text/javascript">
        function ajax(){
        var req = new XMLHttpRequest(); 
        
        req.onreadystatechange = function(){
            if (req.readyState == 4 && req.status == 200) {
            document.getElementById('chat').innerHTML = req.responseText;   
            }
        }
            req.open('GET', 'chat.php', true);
            req.send();
            }
            
        setInterval(function(){ajax();}, 1000);
    </script>
</head>
<body onload="ajax();">
    <div id='contenedor'>
              <div id='caja-chat'>
              <div id='chat'> </div>
               </div>
               <form method="POST" action="index.php">
                      <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
                      <input type="submit" name="enviar" value="Enviar">
                      
                      
               </form>
        <?php
        $conexion = conectar();
    if (isset($_POST['enviar'])) {
        $nombre=$_SESSION["usuario"];
        $mensaje = $_POST['mensaje'];
        $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre','$mensaje')";
        $ejecutar = $conexion->query($consulta);
                                                                               
        # if ($ejecutar) {
        #     echo "<embed loop='false' hidden='true' src='yoshi.mp3' autoplay='true'>";
        # }
        unset($_POST);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
            ?>
        
        <?php
        }
        if(isset($_SESSION['iniciosesion1'])){
        ?>
        <form action='menuadmin.php'>
        <input type='submit' value='Menu Admin' ></form>
        <?php
        }else{
        ?>
        <form action='menuPrincipal.php'>
         <input type='submit' value='Menu' ></form>
        <?php
        }
        ?>
        </div>
    
</body>
</html>