<?php
  header('Content-Type: text/html; charset=UTF-8');
  if(!isset($_GET['catalogo'])) $catalogo=null;
  else $catalogo=$_GET['catalogo'];
?>
<!doctype html >
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <div id="header">
        <h1>Artefactos Lumínicos SA de CV</h1>
          <div id="menu">
            <ul><li><a  href="cerrar_sesion.php">Cerrar Sesion</a></li></ul>
          </div>
      </div>
      <br><br><br>
      <div id="modificar">
        <div id="titulo2">Generador de Partidas para la Cotización.</div>
          <table  class="tablesorter" border="5px" width="1000">
            <thead>
              <tr>
                <th width="10%">Partida</th>
                <th width="10%">Cantidad</th>
                <th width="10%">Unidad</th>
                <th width="10%">Catálogo</th>
                <th width="40%">Descripción</th>
                <th width="10%">P.Unitario</th>
                <th width="10%">P.Total</th>
              </tr>
            </thead>
            <?php
              header('Content-Type: text/html; charset=UTF-8');
              session_start();
              $id_usuario=$_SESSION['usuario'];
              include("funciones_mysql.php");
              $conexion=conectar();
              if(isset($_SESSION['cotizacion']))
                $id_cotizacion=$_SESSION['cotizacion'];
              else {
                $sql="SELECT * FROM Cotizaciones ORDER BY id_cotizacion
                  DESC LIMIT 1";
                $resultado=query($sql, $conexion);
                $campo=mysql_fetch_row($resultado);
                $id_cotizacion=$campo[0] + 1;
                if($id_cotizacion=="") $id_cotizacion=1;
                $_SESSION['cotizacion']=$id_cotizacion;
                $fecha=date('y.m.d');
                $empresa=$_POST['empresa'];
                $_SESSION['empresa']=$empresa;
                $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
                $resultado=query($sql, $conexion);
                $campo=mysql_fetch_array($resultado);
                $id_cliente=$campo['id_cliente'];
                $id_usuario=$campo['id_usuario'];
                $sql="INSERT INTO Cotizaciones(id_cotizacion, fecha,
                  id_cliente, id_usuario) VALUES('$id_cotizacion','$fecha',
                  '$id_cliente','$id_usuario')";
                $resultado=query($sql, $conexion);
              }
              $sql="SELECT * FROM Partidas WHERE id_cotizacion=
                '$id_cotizacion'";
              $resultado=query($sql, $conexion);
              while($campo=mysql_fetch_array($resultado)) {
                echo "<tr>
                  <td>".$campo['partida']."</td>
                  <td>".$campo['cantidad']."</td>
                  <td>".$campo['unidad']."</td>
                  <td>".$campo['catalogo']."</td>
                  <td>".$campo['descripcion']."</td>
                  <td>".$campo['precio_uni']."</td>
                  <td>".$campo['precio_total']."</td>
                </tr>";
              }
            ?>
          </table>
          <br><br><br>
          <form action="partidas2.php" method="POST">
          <table width="900px" border=1>
            <tr>
              <td>
                <?php
                  echo "<input type='text' name='catalogo' id='Text1'";
                  if($catalogo=="") echo "placeholder='Catálogo'";
                  else echo "value='$catalogo'";
                  echo "size='12'onkeyup='fAgrega();'>
                  <a id='Text2'><input type='button' value='Buscar'></a>
                  <br><br>";
                  if($catalogo != "")
                    echo
                    "<input type='text' name='partida' placeholder='Partida'
                      size='13'>
                    <br><br>
                    <input type='text' name='cantidad' placeholder='Cantidad'
                      size='13' >
                    <br><br>
                    <input type='text' name='precio_uni'
                      placeholder='Precio Unitario' size='13'>
                    <br><br>";
                ?>
              </td>
              <td width="600px">
                <?php
                  if($catalogo != "") {
                    echo "<table width='600px'>
                      <tr>
                        <td width='15%'>Id</td>
                        <td width='15%'>Unidad</td>
                        <td width='70%'>Descripcion</td>
                      </tr>";
                      $sql="SELECT * FROM Catalogo WHERE id_catalogo LIKE
                        '%$catalogo%'";
                      $resultado=query($sql, $conexion);
                      while($campo=mysql_fetch_array($resultado)) {
                        echo "<tr>
                          <td>".$campo['id_catalogo']."</td>
                          <td>".$campo['unidad']."</td>
                          <td>".$campo['descripcion']."</td>
                        </tr>
                    </table>";
                    }
                  }
                ?>
              </td>
            </tr>
          </table>
          <br><br><br><br><br><br><br><br><br><br>
          <table>
            <tr>
              <td><input type="submit" value="Agrgar Partida[+]"></td>
          </form>
              <td>
                <a href="notas.php"><input type="button" value="Siguiente"></a>
              </td>
            </tr>
          </table>
          <br><br><br>
          <?php echo $catalogo; ?>
      </div>
    </div>
    <script>
      function fAgrega() {
        var link="?catalogo=";
        var catalogo=document.getElementById("Text1").value;
        document.getElementById("Text2").href=link + catalogo;
      }
    </script>
  </body>
</html>
