<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar(); $id_cotizacion=$_SESSION['cotizacion'];
  $no_nota=$_SESSION['no_nota']; $descripcion=$_POST['descripcion'];
  $eliminar=array("<!doctype html>", "<html>", "<head>", "</head>", "<body>",
    "</body>", "</html>", "  ");
  $descripcion=str_replace($eliminar, "", $descripcion);
  trim($descripcion);
  $sql="UPDATE Notas SET descripcion='$descripcion' WHERE
    id_cotizacion='$id_cotizacion' AND no_nota='$no_nota'";
  $res=query($sql, $con);
  if($res) header("Location: notas.php");
?>
