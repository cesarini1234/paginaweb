<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesion</title>
        <link rel="stylesheet" href="estilos.css">
        <STYLE type="text/css">
		BODY {color:blue;background-color:scrollbar;}
	</STYLE>
    </head>
    <body>
        <div class=iniciarsesion style="height: 300px; width: 400px; left: 500px; top: 200px; position: absolute; z-index: 10; text-align: justify;"><?php
session_start();
include ("MysqlConn.php");
$conexion = conectar();
$e=$_GET['correo'];
$l=$_GET['contraseña'];
$num=1;//Verificamos primero si los apartados que queremos recibir agrego algo en los dos
if(!empty($_GET['correo']) && !empty($_GET['contraseña'])){
$sql = "SELECT * FROM usuario where correo='$e' and contraseña='$l'";
$result = $conexion->query($sql);
$i=$l;//Si los agrego aqui lo que haremos sera estar buscando si ya se registro antes y esta en la base de datos
if($result->num_rows > 0){
while ($row = mysqli_fetch_assoc($result)) {
$dbcorreo=$row['correo'];
$dbcontraseña=$row['contraseña'];
$dbidusuario=$row['idusuario'];
$_SESSION['usuario']=$row['nombre'];
$_SESSION['correo']=$row['correo'];
}//Aqui verificamos si la contraseña y el correo son iguales y si si es por que ya inicio sesion
if($e==$dbcorreo && $i==$dbcontraseña && $num==$dbidusuario){
$_SESSION['iniciosesion1']=TRUE;
//header("Location:menuadmin.php");
echo'<script type="text/javascript">window.location="menuadmin.php";</script>';
}else if($e==$dbcorreo && $i==$dbcontraseña){
$_SESSION['iniciosesion']=TRUE;
//header("Location:menuPrincipal.php");
echo'<script type="text/javascript">window.location="menuPrincipal.php";</script>';
}else{
echo'<script type="text/javascript">
alert("Correo o contraseña incorrecta");
window.location.href="iniciosesion.php";
</script>';
}
}else{
echo'<script type="text/javascript">
alert("Correo o contraseña incorrecta");
window.location.href="iniciosesion.php";
</script>';
}       
mysqli_close($conexion);
}
?>
        </div>
    </body>
</html>
