<?php
  if($seccion==null) require_once("principal.php");
  if($seccion=="principal") require_once("principal.php");
  if($seccion=="login") require_once("login.php");
  if($seccion=="proyectos") require_once("proyectos.php");
  if($seccion=="clientes") require_once("clientes.php");
  if($seccion=="cotizaciones") require_once("cotizaciones.php");
  if($seccion=="verCotizacion") require_once("verCotizacion.php");
  if($seccion=="eliminarCotizacion") require_once("eliminarCotizacion.php");
  if($seccion=="proyectos") require_once("botonesCrear.php");
  if($seccion=="gestionProyecto") require_once("gestionProyecto.php");
?>
