<?php
  if($seccion==null)
    require_once("inicio.php");
  if($seccion=="inicio")
    require_once("inicio.php");
  if($seccion=="preguntas")
    require_once("preguntasFrecuentes.php");
  if($seccion=="objetivo")
    require_once("objetivo.php");
  if($seccion=="mision")
    require_once("mision.php");
  if($seccion=="vision")
    require_once("vision.php");
  if($seccion=="quienesSomos")
    require_once("quienesSomos.php");
  if($seccion=="formasPago")
    require_once("formasPago.php");
  if($seccion=="bibliotecaIlu")
    require_once("bibliotecaIlu.php");
  if($seccion=="videos")
    require_once("videos.php");
?>
