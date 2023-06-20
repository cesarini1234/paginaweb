<?php include_once "encabezado.php" ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once "funciones.php";
$productos = obtenerProductos();
$res = obtenerIdsDeProductosEnCarrito();
//$res = obtenerIdsDeProducto();
var_dump($res);
?>
<div class="columns">
    <div class="column">
    </div>
</div>
<?php
if (isset($_SESSION['carrito'])) {

    // Revisamos los productos en el carro
    $idsProductos = array();
    $hashCategorias = array(); // matriz asociativa de Ids de categorias
    foreach($_SESSION['carrito'] as $product) {

        // Si el producto tiene Id
        if ($product['id']) {
            $idsProductos[] = $product['id'];
        }

        // Si el producto tiene Id de categoria y todavia no fue guardado en la matris asoc.
        if ($product['id_categoria'] && !$hashCategorias[$product['id_categoria']]) {
            $hashCategorias[$product['id_producto']] = true;
        }
    }


    if (!empty($idsProductos)) {

        //
        $idsProductos = implode(',', $idsProductos);

        // Buscamos aquellos productos que no esten en el carro
        $query = 'SELECT *
        FROM productos
        WHERE id NOT IN ('.$idsProductos.')';

        //
        if (!empty($hashCategorias)) {
            // Obtenemos los Ids que estan como claves de la matriz asociativa
            $idsCategories = array_keys($hashCategorias);
            $idsCategories = implode(',', $idsCategories);

            // y que esten en la misma categoria o subCategoria
            $query .= ' AND id_categoria IN (
                SELECT id
                FROM categories
                WHERE id IN ('.$idsCategories.')
                OR id_categoria IN ('.$idsCategories.')
            )';
        }

        // Ordenados por el titule de la A-Z
        $query .= ' ORDER BY titulo ASC';

        // Buscamos los primeros 5
        $query .= ' LIMIT 5';
    }
}?>

<?php if(!$res){ ?>

    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $res->id_producto ?>
                    </p>
                   
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php echo $producto->descripcion ?>
                         
                    </div>
                    <image src="sudadera1.png">
                    <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
                    
                    <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
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
                    <?php } ?>
                    <?php
                        if(!empty($_GET['id'])){
                            //Credenciales de conexion
                            $Host = 'localhost';
                            $Username = 'root';
                            $Password = '';
                            $dbName = 'proyecto';

                            //Crear conexion mysql
                            $db = new mysqli($Host, $Username, $Password, $dbName);

                            //revisar conexion
                            if($db->connect_error){
                               die("Connection failed: " . $db->connect_error);
                            }

                            //Extraer imagen de la BD mediante GET
                            $result = $db->query("SELECT imagen FROM productos WHERE id = {$_GET['id']}");

                            if($result->num_rows > 0){
                                $imgDatos = $result->fetch_assoc();

                                //Mostrar Imagen
                                header("Content-type: image/jpg"); 
                                echo $imgDatos['imagen']; 
                            }else{
                                echo 'Imagen no existe...';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
