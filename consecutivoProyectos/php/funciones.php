<?php session_start(); ?>
<!--fSesiones------------------------------------------------------------------>
<!--conexiónDB----------------------------------------------------------------->
<?php
  function conectar() {
    $li=mysql_connect("localhost", "artes_cotizacion", "Cotizaciones_1209");
    mysql_set_charset('utf8');
    mysql_select_db("artes01_Cotizaciones", $li) OR DIE("Conexión no hecha");
    return $li;
  } $con=conectar();
  function query($sql, $con) {
    $res=mysql_query($sql, $con);
    return $res;
  }
?>
<!--fConexiónDB---------------------------------------------------------------->
<!--verificaSesionTerminada---------------------------------------------------->
<?php
  if(!isset($_SESSION['user'])) {
    if(!isset($_GET['sec'])) {}
    else {
      if($_GET['sec']=='principal') {}
      else {
        if($_GET['sec']=='login') {
          if(isset($_GET['logout'])) { header('Location: ?sec=login'); }
        }
        else { header('Location: ?sec=login'); }
      }
    }
  }
  if(isset($_GET['sec'])) { /*Para evitar mensaje de undefined sec*/
    if(isset($_SESSION['user']) && $_GET['sec'] == 'login') {
      if(isset($_GET['logout'])) {} else { header('Location: ?sec=principal'); }
    }
  } /*Si se quiere entrar a login normal cuando hay sesion iniciada, redirigirá
      a sec=principal*/
  function loginin() { //Realizada al presionar boton Entrar en login
    if(isset($_GET['loginin'])) {
      global $con;
      $_SESSION['user']=$_POST['user']; $user=$_SESSION['user'];
      $pass=$_POST['pass']; $userTest=1;
      $sql="SELECT * FROM Log_In WHERE id_usuario='$user' and password='$pass'";
      $res=query($sql, $con);
      $cam=mysql_fetch_array($res);
      if ($cam['id_usuario'] == $user) { $userTest=$cam['id_usuario']; }
      if ($userTest == 1) {
        session_destroy();
        header("Location: ?sec=login&errorLogin=true");
      }
      else {
        $sql= "SELECT * FROM Usuarios WHERE id_usuario='$userTest'";
        $res=query($sql, $con);
        $cam=mysql_fetch_array($res);
        $permiso=$cam['permiso']; $activo=$cam['activo'];
        $_SESSION['nUser']=$cam['nombre'];
        if ($permiso == '1' && $activo == '1') { $_SESSION['permiso']='1'; }
        if ($permiso == '2' && $activo == '1') { $_SESSION['permiso']='2'; }
        if ($activo == 0) {
          session_destroy();
          header("Location: ?sec=login&errorLogin2=true");
        } //Si no está activo, manda error
        else { header("Location: ?sec=principal"); }
      } //Si todo esta bien, manda a principal
    }
  }
  if(isset($_SESSION['permiso'])) { $logeado=1; }
  else { $logeado=2; }
  if(isset($_GET['cerrarSesion'])) { //Cierra sesión con botón
    setcookie (session_id(), "", time() - 3600);
    session_destroy();
    session_write_close();
    header("Location: ?sec=login");
  }
?>
<!--fIndex.php----------------------------------------------------------------->
<!--proyectos.php-------------------------------------------------------------->
<?php
  if(isset($_POST['proyecto'])) {
    function guardaForm() { $np=array($_POST); echo $np[0]; }
  }
  function nProyecto() {
    global $con;
    $sql="SELECT * FROM proyecto ORDER BY idProyecto DESC LIMIT 1";
    $res=query($sql, $con);
    $cam=mysql_fetch_row($res);
    $idProyecto=$cam[0] + 1;
    if ($idProyecto == "") { $idProyecto=1; }
    echo "Proyecto no. ".$idProyecto;
  }
  function nomUsuario() { echo $_SESSION['user']; }
  function generaTablaPE() {
    global $con;
    if($_SESSION['permiso'] == 1) {
      $sql="SELECT * FROM proyecto ORDER BY idProyecto DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $idPE=$cam['idProyecto'];
        $fechaPE=$cam['fecha'];
        $nombrePE=$cam['nombreProyecto'];
        ?>
        <tr><!--Genera contenido de la tabla-->
          <td><?php echo $idPE; ?></td>
          <td><?php echo $fechaPE; ?></td>
          <td><?php echo $nombrePE; ?></td>
          <td>
            <span onclick="gestionProyecto(<?php echo $idPE; ?>, 'ver')">
              ver
            </span>
            <span onclick="gestionProyecto(<?php echo $idPE; ?>, 'editar')">
              editar
            </span>
          </td>
        </tr>
        <?php
      }
    }
    else {
      $userPE=$_SESSION['user'];
      $sql="SELECT * FROM proyecto WHERE idUsuario='$userPE'
        ORDER BY idProyecto DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $idPE=$cam['idProyecto'];
        $fechaPE=$cam['fecha'];
        $nombrePE=$cam['nombreProyecto'];
        ?>
        <tr>
          <td><?php echo $idPE; ?></td>
          <td><?php echo $fechaPE; ?></td>
          <td><?php echo $nombrePE; ?></td>
          <td><span>ver</span><span>editar</span></td>
        </tr>
        <?php
      }
    }
  }
?>
<!--fProyectos.php------------------------------------------------------------->
<!--gestionProyecto.php-------------------------------------------------------->
<?php
  function pGetIdProyecto() { echo $_GET['idProyecto']; }
  function generaNoPlano() {
    $idProyecto=$_GET['idProyecto'];
    global $con;
    $sql="SELECT * FROM plano WHERE idProyecto='$idProyecto' ORDER BY idPlano
      DESC LIMIT 1";
    $res=query($sql, $con);
    $cam=mysql_fetch_row($res);
    $idPlano=$cam[0] + 1;
    if ($idPlano == "") { $idPlano=1; }
    echo "<script>window.alert('hola');</script>";
    return $idPlano;
  }
?>
<!--fGestionProyecto.php------------------------------------------------------->
<!--cotizaciones.php----------------------------------------------------------->
<?php
  function generaTablaCotizaciones() {
    global $con;
    if($_SESSION['permiso'] == 1) {
      $sql="SELECT * FROM Cotizaciones ORDER BY id_cotizacion DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $activo=$cam['activo'];
        $noCotizacion=$cam['id_cotizacion'];
        $fecha=$cam['fecha'];
        $idCliente=$cam['id_cliente']; //Termina FROM Cotizaciones
        $sql2="SELECT * FROM Cotizaciones WHERE id_cotizacion='$noCotizacion'";
        $res3=query($sql2, $con);
        $cam=mysql_fetch_array($res3);
        $idUsuario=$cam['id_usuario']; //Termina FROM Cotizaciones 2
        $sql2="SELECT * FROM Usuarios WHERE id_usuario='$idUsuario'";
        $res0=query($sql2, $con);
        $cam=mysql_fetch_array($res0);
        $vendedor=$cam['nombre'] . ' ' . $cam['apellido_p'];
        $sql2="SELECT * FROM Clientes WHERE id_num_cliente='$idCliente'";
        $res2=query($sql2, $con);
        $cam=mysql_fetch_array($res2);
        $empresa=$cam['empresa']; //Termina FROM Clientes
?>
        <tr><!--Gerena contenido de la tabla-->
          <td><?php echo $noCotizacion; ?></td>
          <td><?php echo $fecha; ?></td>
          <td><?php echo $empresa; ?></td>
          <td><?php echo $vendedor; ?></td>
          <td>
            <div onclick="verCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Ver</span>
            </div> <!--acciones.js-->
            <div onclick="eliminarCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Eliminar</span>
            </div> <!--acciones.js-->
          </td>
        </tr>
        <?php
      }
    }
    else {
      $sesionUsuario=$_SESSION['user'];
      $sql="SELECT * FROM Cotizaciones WHERE id_usuario='$sesionUsuario'
        ORDER BY id_cotizacion DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $activo=$cam['activo'];
        $noCotizacion=$cam['id_cotizacion'];
        $fecha=$cam['fecha'];
        $idCliente=$cam['id_cliente']; //Termina FROM Cotizaciones
        $sql2="SELECT * FROM Cotizaciones WHERE id_cotizacion='$noCotizacion'";
        $res3=query($sql2, $con);
        $cam=mysql_fetch_array($res3);
        $idUsuario=$cam['id_usuario']; //Termina FROM Cotizaciones 2
        $sql2="SELECT * FROM Usuarios WHERE id_usuario='$idUsuario'";
        $res0=query($sql2, $con);
        $cam=mysql_fetch_array($res0);
        $vendedor=$cam['nombre'] . ' ' . $cam['apellido_p'];
        $sql2="SELECT * FROM Clientes WHERE id_num_cliente='$idCliente'";
        $res2=query($sql2, $con);
        $cam=mysql_fetch_array($res2);
        $empresa=$cam['empresa']; //Termina FROM Clientes
        ?>
        <tr>
          <td><?php echo $noCotizacion; ?></td>
          <td><?php echo $fecha; ?></td>
          <td><?php echo $empresa; ?></td>
          <td><?php echo $vendedor; ?></td>
          <td>
            <div class="verP2"
              onclick="verCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Ver</span>
            </div> <!--acciones.js-->
          </td>
        </tr>
        <?php
      }
    }
  }
?>
<!--fCotizaciones.php---------------------------------------------------------->
<!--verCotizacion.php---------------------------------------------------------->
<?php
  function generaDatosCotizacion() {
    global $con;
    $idCotizacion=$_GET['cotizacion'];
    $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$idCotizacion'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res);
    $idCotizacion=$cam['id_cotizacion'];
    $fecha=$cam['fecha'];
    $vigencia=$cam['vigencia'];
    $noPartidas=$cam['no_partidas'];
    ?>
    <h3>No Cotizacion:</h3>
    <span class="noCotizacion"><?php echo $idCotizacion; ?></span>
    <div class="break space20px"></div>
    <h3>Fecha:</h3>
    <span><?php echo $fecha; ?></span>
    <div class="break space20px"></div>
    <h3>Vigencia:</h3>
    <span><?php echo $vigencia; ?></span>
    <div class="break space20px"></div>
    <h3>Partidas:</h3>
    <span><?php echo $noPartidas; ?></span>
    <?php
  }
  function generaDatosVenClien() {
    global $con;
    $idCotizacion=$_GET['cotizacion'];
    $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$idCotizacion'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res);
    $idCliente=$cam['id_cliente']; //TerminaCotizaciones
    $sql="SELECT * FROM Datos_Cotizacion WHERE id_cotizacion='$idCotizacion'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res);
    $dCliente=$cam['datos_cliente'];
    $dContacto=$cam['datos_contacto'];
    $dVendedor=$cam['datos_vendedor'];
    ?>
    <h3>Cliente:</h3>
    <span><?php echo $dCliente; ?></span>
    <div class="break space20px"></div>
    <h3>Datos de contacto:</h3>
    <span><?php echo $dContacto; ?></span>
    <div class="break space20px"></div>
    <h3>Datos del vendedor:</h3>
    <span><?php echo $dVendedor; ?></span>
    <div class="break space20px"></div>
    <?php
  }
  function generaTablaPartidas() {
    global $con;
    $idCotizacion=$_GET['cotizacion'];
    $sql="SELECT * FROM Partidas WHERE id_cotizacion='$idCotizacion' ORDER BY
      no_partida ASC";
    $res=query($sql, $con);
    while ($cam=mysql_fetch_array($res)) {
      $partida=$cam['no_partida'];
      $cantidad=$cam['cantidad'];
      $catalogo=$cam['catalogo'];
      ?>
      <tr>
        <td><?php echo $partida; ?></td>
        <td><?php echo $cantidad; ?></td>
        <td><?php echo $catalogo; ?></td>
      </tr>
      <?php
    }
  }
?>
<!--fVerCotizacion.php--------------------------------------------------------->
<!--index.php------------------------------------------------------------------>
<script>
  var logeado=<?php echo $logeado; ?>;
  if(logeado == 1) {
    var user="<?php if(isset($_SESSION['nUser']))echo $_SESSION['nUser'];?>";
  } //Para mostrar nombre en header
</script>
<!--fIndex.php----------------------------------------------------------------->
  <!--end-------------------------------------------------------------------->
