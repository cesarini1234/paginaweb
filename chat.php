 <?php
    //session_start();
    include ( "MysqlConn.php");   
    $conexion = conectar();
    $consulta =  "SELECT * FROM chat ORDER BY id ASC";
    $ejecutar =  $conexion -> query($consulta);
    while($fila = $ejecutar -> fetch_array()):
?>
    <div id="datos-chat" style="display: flex; justify-content: space-between; align-items: center">        
    <div style="text-align: left">
        <span style="color: #1c62c4;"> <?php echo $fila['nombre']; ?></span>
        <span style="color: #848484;"><?php echo  $fila['mensaje']; ?></span>
    </div>
    <span style="text-align: right; flex-shrink: 0"><?php echo formatearFecha( $fila['fecha']); ?></span>
    </div>
<?php endwhile; ?>