<?php
  session_start();
  include("funciones_mysql.php");
  $con=conectar();
  header('Content-Type:text/html; charset=UTF-8');
  $id_cotizacion=$_SESSION['cotizacion'];
  $id_partida=$_GET['id_partida'];
  $sql="SELECT * FROM Partidas where id_cotizacion='$id_cotizacion' AND
    id_partida='$id_partida'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  if(isset($_POST['catalogon'])) {
    $catalogo2=$_POST['catalogon'];
    if($catalogo2!=$catalogo) $catalogo=$catalogo2;
    $sql="SELECT * FROM Catalogo WHERE id_catalogo='$catalogo2'";
    $res=query($sql, $con);
    $cam=mysql_fetch_assoc($res);
    if($catalogo2==$catalogo)
    if($cam['descripcion']=="")
      $descripcion2="Descripción no encontrada";
    else $descripcion2=$cam['descripcion'];
  }
  else $descripcion2=$descripcion;
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <br><br><br>
      <div id="grande">
      <form action='editar_partida.php?id_partida=<?php echo $id_partida; ?>'
        method='POST'>
      <div id="izq">Ingrese el catálogo nuevo:</div>
      <input type="text" class="cajita" name="catalogon"
        placeholder="Catálogo" size="60" id="catalogo"
        value="<?php echo $catalogo; ?>">
      <input name='car' type='submit' value='>>' id='boton_versionn'>
      </form>
        <br>
        <hr>
        <br><br>
        <form action="editar_partida2.php?id_partida=<?php echo $id_partida; ?>"
          method="POST">
          <tr><td>
            <div id="izq">Ingrese la partida:</div>
            <input type="text" class="cajita" name="partida"
              placeholder="Partida" size="15" id="partida"
              value="<?php echo $partida; ?>">
            <br><br><br>
            <div id="izq">Ingrese el catalogo:</div>
            <input type="text" class="cajita" name="catalogo"
              placeholder="Catálogo" size="60" id="catalogo"
              value="<?php echo $catalogo; ?>">
            <br><br><br>
            <div id="izq">Ingrese la descripción:</div>
            <div id="der">
              <textarea rows="3" cols="35" name="descripcion"
                placeholder="Descripción" id="txt">
                <?php echo $descripcion2; ?>
              </textarea>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div id="izq">Unidad:</div>
            <select style="background-color:white" class="cajita" name="unidad"
              id="unidad">
              <option style="background-color:#DADADA" disabled selected>
                Unidad
              </option>
              <option value="PZA." <?php if($unidad=='PZA.') echo 'selected' ?>>
                PZA.
              </option>
              <option name="JGO." <?php if($unidad=='JGO.') echo 'selected'; ?>>
                JGO.
              </option>
              <option value="METRO"
                <?php if($unidad=='METRO') echo 'selected' ?>>
                METRO
              </option>
              <option name="CJTO."
                <?php if($unidad=='CJTO.') echo 'selected' ?>>
                CJTO.
              </option>
              <option name="S/N" <?php if($unidad=='S/N') echo 'selected' ?>>
                S/N
              </option>
              <option name="N/A" <?php if($unidad=='N/A') echo 'selected' ?>>
                N/A
              </option>
              <option name="vacio" <?php if($unidad=='') echo 'selected' ?>>
              </option>
            </select>
            <br><br><br>
            <div id="izq">Cantidad:</div>
            <input type="number" class="cajita" name="cantidad"
              placeholder="Cantidad" id="cantidad" min="0"
              value="<?php echo $cantidad; ?>">
            <br><br><br>
            <div id="izq">Precio unitario:</div>
            <input type="number" class="cajita" name="precio_uni"
              placeholder="Precio Unitario" id="precio" size="15" min="0"
              step="any" value="<?php echo $precio_uni; ?>">
            <br><br><br>
          </td></tr>
        </div>
            <div align="right">
              <button id="botonp" type="submit">Aceptar</button>
              <br>
            </div>
          </form>
      <div align="left" style="margin-top:-45px;">
        <a href="partidas.php">
          <input type="button" value="Atras" id="botonp">
        </a>
      </div>
    </div>
    <script src="tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector:"textarea",
        plugins:[
          "advlist autolink autosave lists charmap print preview hr anchor",
          "searchreplace visualblocks visualchars code media nonbreaking",
          "directionality paste fullpage textcolor colorpicker textpattern"
        ],
        toolbar1:"bold italic underline strikethrough | forecolor ",
        menubar:false,
        toolbar_items_size:'small',
        style_formats:[
          {title:'Bold text', inline:'b'},
          {title:'Red text', inline:'span', styles:{color:'#ff0000'}},
          {title:'Red header', block:'h1', styles:{color:'#ff0000'}},
          {title:'Example 1', inline:'span', classes:'example1'},
          {title:'Example 2', inline:'span', classes:'example2'},
          {title:'Table styles'},
          {title:'Table row 1', selector:'tr', classes:'tablerow1'}
        ],
        templates:[
          {title:'Test template 1', content:'Test 1'},
          {title:'Test template 2', content:'Test 2'}
        ]
      });
    </script>
    <script>
      function datos1() {
        var partida=document.getElementById("partida").value;
        var catalogo=document.getElementById("catalogo").value;
        var catalogo2=encodeURIComponent(catalogo);
        var dir="editar_partida.php?partida=";
        var dir2="&catalogo=";
        var union=dir.concat(partida);
        var union2=dir2.concat(catalogo2);
        var res=union.concat(union2);
        window.location=res;
      }
      function datos2() {
        var partida=document.getElementById("partida").value;
        var catalogo=document.getElementById("catalogo").value;
        var descripcion=document.getElementById("txt").value;
        var unidad=document.getElementById("unidad").value;
        var cantidad=document.getElementById("cantidad").value;
        var precio=document.getElementById("precio").value;
        var dir="agregar_partida2.php?partida=";
        var dir2="&catalogo=";
        var dir3="&descripcion=";
        var dir4="&unidad=";
        var dir5="&cantidad=";
        var dir6="&precio=";
        var union=dir.concat(partida);
        var union2=dir2.concat(catalogo);
        var union3=dir3.concat(descripcion);
        var union4=dir4.concat(unidad);
        var union5=dir5.concat(cantidad);
        var union6=dir6.concat(precio);
        var res=union.concat(union2);
        var res2=union3.concat(union4);
        var res3=union5.concat(union6);
        var res4=res.concat(res2);
        var res5=res4.concat(res3);
        window.location=res5;
      }
    </script>
  </body>
</html>
