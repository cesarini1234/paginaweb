<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de producto</title>
        <link rel="stylesheet" href="estilos2.css">
    </head>
    <body>
        <div class=registro style="height: 300px; width: 400px; left: 500px; top: 200px; position: absolute; text-align: center;">
        <?php 
        session_start();
        include ("MysqlConn.php");
        $conexion = conectar();
        //Setencia de consulta SQL
        $sql = "SELECT * FROM producto";
        $result = $conexion->query($sql);
        
        if ($result->num_rows > 0){
            //Recorremos cada registro y obtenemos los valores de las columnas especificada
            echo "<table border='1' aling='center'>";
            echo "<tr>";
            echo "<th> NOMBRE PRODUCTO</th>";
            echo "<th> COLOR PRODUCTO</th>";
            echo "<th> PRECIO DEL PRODUCTO</th>";
            echo "<th> LIGA DE CONSULTA </th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()){
                //Aqui mostraremos un link que te mandara al foro del tema que deseemos
                echo"<tr>";
                    echo "<td>" . $row["tema"] ."</td>" . "<td>". 
                        $row["preferencia"] . "</td>"."<td>". $row["precio"] . "</td>". 
                            "<td>" . "<a href='mostrarproducto.php?tema=".$row["tema"] ."'>Ver Producto</a>".
                            "</td>";
                     echo "</tr>";
            }
            echo "</table>";
        }else {
            echo "0 results";
        }
        mysqli_close($conexion);
        ?>
            <div style="height: 30px; width: 40px; left: -90px; top: 20px; position: absolute; z-index: 10; font-size: 14pt; text-align: justify;">
        <form action="menuadmin.php">
        <input type="submit" value="Menu">
        </div>
    </body>
</html>
