<?php
  if($seccion==null)
    require_once("principal.php");
  if($seccion=="principal")
    require_once("principal.php");
  if($seccion=="proyectos")
    require_once("proyectos.php");
  if($seccion=="clientes")
      require_once("clientes.php");
  if($seccion=="cotizaciones")
      require_once("cotizaciones.php");
?>
