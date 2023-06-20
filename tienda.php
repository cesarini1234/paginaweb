<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<?php
    function banner(){
    if(empty($_GET['id'])){
        //Credenciales de conexion
        $Host = 'localhost';
        $Username = 'id18017551_root';
        $Password = '~pnrX7&SL)t~$(]i';
        $dbName = 'id18017551_proyecto';

        //Crear conexion mysql
        $db = mysqli_connect($Host, $Username, $Password, $dbName);

        //revisar conexion
        if($db->connect_error){
           die("Connection failed: " . $db->connect_error);
        }
        $query = "SELECT imagen FROM productos where id=10;";
        $res = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($res)){
            ?>
            <img width="100" src="data: image/png;base64, <?php echo base64_encode($row['imagen']);?>">

        <?php
        }
    }
}
?>

<?php include_once "encabezado.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page Banner</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="estilos3.css" rel="stylesheet"> 
    <style>
        html, body {
          margin: 0;
        }

        .banner {
          background: #f2f2f2;
        }

        .banner__content {
          padding: 0px;
          max-width: 500px;
          margin: 0 auto;
          display: flex;
          /*align-items: right;*/
        }

        .banner__text {
          flex-grow: 1;
          line-height: 1.4;
          font-family: "Quicksand", sans-serif;
        }

        .banner__close {
          background: none;
          border: none;
          cursor: pointer;
        }

        .banner__text,
        .banner__close > span {
          color: #000000;
        }
        button{
            align-content: top-right;
        }
    </style>
</head>


<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Tienda</h2>
    </div>
</div>

<?php 
include ("MysqlConn.php");
        $conexion = conectar();
        //Setencia de consulta SQL
        $sql = "SELECT * FROM productos";
        $result = $conexion->query($sql);
        foreach ($productos as $producto) { ?>

    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">

                            
                                <?php 
                                if ($row = $result->fetch_assoc()){
                                        echo "<a href='mostrarproducto.php?tema=".$row["tema"]."'>". $producto->nombre."</a>"; 
}?>
                    </p>
                   
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php echo $producto->descripcion, ". <b> Producto suministrado por ", $producto->proveedor , ". </b>" ?>
                         
                    </div>
                    <?php
                        $Host = 'localhost';
                        $Username = 'id18017551_root';
                        $Password = '~pnrX7&SL)t~$(]i';
                        $dbName = 'id18017551_proyecto';

                        //Crear conexion mysql
                        $db = mysqli_connect($Host, $Username, $Password, $dbName);

                        //revisar conexion
                        if($db->connect_error){
                           die("Connection failed: " . $db->connect_error);
                        }

                        $query = ("SELECT imagen FROM productos WHERE id = ".$producto->id.";");
                        $res = mysqli_query($db, $query);
                        if ($res) {
                            while ($row1 = $res->fetch_assoc()){?>
                            <img height="10" src="data:image/png;base64, <?php echo base64_encode($row1['imagen']);?>"/>
                            <?php
                            }
                        }?>
                    <?php echo "<p class='my-3'>", $producto->tema, ".</p>" ?>
                    <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
                    
                    <?php @session_start(); if(isset($_SESSION["iniciosesion"])) {
                    if(productoYaEstaEnCarrito($producto->id)) { ?>
                        <form action="eliminar_del_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                        </form>
                    <?php } else { ?>
                        <form action="agregar_al_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                            </button>
                        </form>
                    <?php }} ?>
                    
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<hr>
<h4 class="is-size-2">Te puede interesar</h4>
<div class="banner">
        <div class="banner__content">
            <div class="banner__text">
                <?php banner(); ?>
                <!--<image src="sudadera1.png">-->
            </div>
            <button class="banner__close" type="button" >
                <span class="material-icons">
                    close
                </span>
            </button>
        </div>
    </div>
    <script>
        document.querySelector(".banner__close").addEventListener("click", function () {
        this.closest(".banner").style.display = "none";
        });
    </script>
                    

