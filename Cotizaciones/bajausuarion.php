<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $id_usuario=$_SESSION['usuario']; $con=conectar(); $nombre=$_POST['nombre'];
  if(!isset($_GET['sec'])) $seccion=null;
  else $seccion=$_GET['sec'];
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <br><br><br>
      <div id="modificar">
        <div id="titulo">
          Realmente desea borrar al usuario
          <br>
          <div id=empresadel><?php echo $nombre; ?></div>
        </div>
        <div id=centrarbaja>
          <a href="?sec=borrar&nombre=<?php echo $nombre; ?>">
            <button class="formu-button2">
              <div id="cambioboton">Aceptar</div>
            </button>
          </a>
          <a href="administracion.php">
            <button class="formu-button2">
              <div id="cambioboton">Cancelar</div>
            </button>
          </a>
        </div>
        <?php
          if($seccion=="borrar") {
            $nombre=$_GET['nombre'];
            $sql="UPDATE Usuarios SET activo='0' WHERE id_usuario='$nombre'";
            $res=query($sql, $con);
        ?>
        <script>
          (function() {
            alert("Se ha eliminado con Éxito");
            document.location.href='administracion.php';
          })();
        </script>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
