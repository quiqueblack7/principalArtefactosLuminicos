<html>
  <body>
    <?php
      if(!isset($_SESSION['usuario'])) header('Location: index.php');
      $con=conectar(); $cont=0; $id_usuario=$_SESSION['usuario'];
      $sql="SELECT * FROM Clientes WHERE id_usuario='$id_usuario' AND
        desactivado='0' ";
      $res=query($sql, $con);
      while($cam=mysql_fetch_array($res)) { $cont=1; }
      if($cont==1) {
    ?>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <div id="addcliente3">Seleccione el cliente a cotizar:</div>
    <form action="partidas.php" method="POST">
    <?php
      $sql="SELECT * FROM Clientes WHERE id_usuario='$id_usuario' AND
        desactivado='0' ORDER BY empresa";
      $res=query($sql, $con);
      echo '<select id=cotizarselect name=empresa>';
        while($cam=mysql_fetch_array($res)) {
          echo '<option style="width:520px">'.$cam["empresa"].'</option>';
          $conectar=1;
        }
      echo '</select>';
    ?>
    <input type="submit" value="Cotizar" class="formu-button">
    </form>
    <?php } if($cont==0) { ?>
      <div id="errorimg"><img src="images/error.png"></div>
    <?php } ?>
  </body>
</html>
