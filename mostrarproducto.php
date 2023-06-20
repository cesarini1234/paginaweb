
<?php include_once "encabezado.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comentarios</title>
        <link rel="stylesheet" href="estilos.css">
        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar;}
	</STYLE>
    </head>
    <body>
        <div class=registro style="height: 300px; width: 400px; left: 500px; top: 200px; position: absolute; text-align: justify;">
        
            <?php 
        //session_start();
        include ("MysqlConn.php");
        $conexion = conectar();
        //Setencia de consulta SQL
        $sql = "SELECT * FROM productos where tema='".$_GET['tema']."';";
        $sqli = "SELECT * FROM comentarios where tema='".$_GET['tema']."';";
        $result = $conexion->query($sql);
        $result1 = $conexion->query($sqli);
        //Mostramos el foro y las respuestas de las columnas que le decimos este se muestra si no inicio sesion
        if ($result->num_rows > 0 || $result1->num_rows > 0){
            if(!isset($_SESSION['iniciosesion'])){
            while ($row1 = $result->fetch_assoc()){?>
            <img height="600px" src="data:image/jpg;base64, <?php echo base64_encode($row1['imagen']);?>"/>
            <?php
            }
            while ($row = $result1->fetch_assoc()){
                echo "<table border='1' aling='center'>";
                echo "<tr>";
                echo "<td>";
                    echo $row["nombre"] .":". "<br>";       
                    echo $row["comentario"]; 
                echo "</td>";
                echo "</tr>";
                echo "</table>";
                echo "<br>";
            }
            }else{
            //Recorremos cada registro y obtenemos los valores de las columnas especificada y este se muestra con algo extra
            //que es algo para agregar una respuesta al foro si iniciaste sesion
            while ($row1 = $result->fetch_assoc()){
                ?>
                    <img height="600px" src="data:image/jpg;base64, <?php echo base64_encode($row1['imagen']);?>"/>
                    <?php
                    echo "<br><a href='comentarios.php?tema=".$row1["tema"] ."'>Agregar Comentario</a> <br><br>";
            }
            while ($row = $result1->fetch_assoc()){
                echo "<table border='1' aling='center'>";
                echo "<tr>";
                echo "<td>";
                 echo $row["nombre"] .":". "<br>";       
                 echo $row["comentario"];
                echo "</td>";
                echo "</tr>";
                echo "</table>";
                echo "<br>";
            }
        }
        }else {
            echo "No hay comentarios de esta prenda";
        }
        mysqli_close($conexion);
        ?>
            <div style="height: 30px; width: 40px; left: -90px; top: 20px; position: absolute; z-index: 10; font-size: 14pt; text-align: justify;">
                <form action="tienda.php">
        <input type="submit" value="Regresar">
        </div>
        </div>
    </body>
</html>

