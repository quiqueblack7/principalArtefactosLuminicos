<?php
  session_start();
  include("funciones_mysql.php");
  $con=conectar();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  if(!isset($_GET['opcion'])) $opcion="nada";
  else $opcion=$_GET['opcion'];
  if(!isset($_POST['producto'])) $producto="nada";
  else $producto=$_POST['producto'];
  if(!isset($_POST['descripcion'])) $descripcion="nada";
  else $descripcion=$_POST['descripcion'];
?>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="tabla.css" rel="stylesheet" type="text/css">
    <title>Catálogo de Productos</title>
  </head>
  <body>
    <div id="detalles"></div>
    <div style="margin-left:450px;" id=tform>
      <img align="center" src="images/logo112x82.png">
      Catálogo de productos
    </div>
    <div align="center" style="margin-top:30px;">
      <table cellspacing="30px" border=0>
        <tr>
          <td valign="top">
            Mostrar todo:
            <br><br>
            <a href="cat_prod.php?opcion=todo">
              <input type="button" value="Mostrar todo">
            </a>
          </td>
          <td valign="top">
            Buscar por catalogo:
            <br><br>
            <form action="cat_prod.php" method="POST">
              <input type=text name=producto required>
              <input type=submit value="Buscar">
            </form>
          </td>
          <td valign="top">
            Buscar por descripción:
            <br><br>
            <form action="cat_prod.php" method="POST">
              <input type=text name=descripcion required>
              <input type=submit value="Buscar">
            </form>
          </td>
          <td valign="top">
            Salir:
            <br><br>
            <a href="administracion.php">
              <input name="button" type="submit" value="Salir" />
            </a>
          </td>
        </tr>
      </table>
    </div>
    <?php
      if($opcion=="todo") include("catalogo.php");
      if($producto!="nada") include("busqueda.php");
      if($descripcion!="nada") include("busqueda2.php");
    ?>
  </body>
</html>
