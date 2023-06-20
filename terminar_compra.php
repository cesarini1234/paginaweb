<?php include_once "encabezado.php";

if(!isset($_SESSION['iniciosesion'])){
//header("iniciosesion.php");
echo"<script>window.location='iniciosesion.php'</script>";
}else{
?><?php
# Es responsabilidad del programador hacer algo con los productos
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
#var_dump($productos);
?><html>
    <head>
        <style>
            *{
                padding: 0;
                margin: 0;
                font-family: Century Gothic;
            }
            body{
               
            }
            form{
                width: 700px;
                margin: auto;
                background-color: #DBDBDB;
                margin-top: 100px;
                
            }
            input, textArea{
                margin: 10px;
                padding: 10px;
                width: 675px;
                font-size: 16px;
                border: none;
                min-height: 100px;
                max-height: 300px;
                min-width: 675px;
                max-width: 675px;
            }
            input[type="submit"]{
                margin-bottom: 10px;
                margin-top: 2px;
                height: 10px;
            }
            .disclaimer {
                display: none;
            }
        </style>
    </head>
    <body>
                <?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$empresa = $_POST['mensaje'];
$header = 'From: ' . $mail . " \r\n";
$header.= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header.= "Mime-Version: 1.0 \r\n";
$header.= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje.= "Su e-mail es: " . $mail . " \r\n";
$mensaje.= "Mensaje: " . $_POST['mensaje'] . " \r\n" ;
$mensaje.= " ". json_encode($productos)."\r\n";
$mensaje.= "Enviado el " . date('d/m/Y', time());//~pnrX7&SL)t~$(]i
#$para = 'monicalizeeth0907@gmail.com';
$para = 'erikgomez198755@outlook.com';
$asunto = 'Nueva compra';
$todo = mail($para, $asunto, utf8_decode($mensaje), $header);
if ($todo) {
    echo '<script language="javascript">alert("Email enviado con exito. \nEspere a la confirmacion y envio de su pedido.");</script>';
    vaciarCarrito();
    echo '<script language="javascript"> window.location.href = "tienda.php" </script>';
}
else {
    echo '<script language="javascript"> alert("Ocurrió un error al tratar de enviar el correo.") </script>';
    echo '<script language="javascript"> window.location.href = "terminar_compra.php" </script>';
}
}}} 
?>
        <div>
            <div>
                <form id="contact-form" class="contact" name="contact-form" method="post" action="terminar_compra.php">
                        <!--<textarea name="mensaje" id="message" rows="4" placeholder="Mensaje para la tienda"></textarea>
                        <input type="submit" name="enviar" value="Terminar Compra"><a href="tienda.php"></a></button>-->   
                        <input type="text" name="nombre" required="required" placeholder="Nombre completo">
                        <input type="email" name="email" required="required" placeholder="Correo electronico">
                        <textarea name="mensaje" id="message" required="required" rows="4" placeholder="Mensaje para la tienda"></textarea>
                        <input type="submit" name="enviar" value="Terminar Compra"><a href="tienda.php"></a></button>    
                </form>
            </div>
        </div>

    </body>
</html>