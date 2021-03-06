<?php
  header('Content-Type: text/html; charset=UTF-8');
  session_start();
  include("funciones_mysql.php");
  $con=conectar();
  if(isset($_GET['no_nota'])) {
    $no_nota=$_GET['no_nota'];
    $id_cotizacion=$_SESSION['cotizacion'];
    $_SESSION['no_nota']=$no_nota;
    $sql="SELECT * FROM Notas WHERE no_nota='$no_nota' AND
      id_cotizacion='$id_cotizacion'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res); $descripcion=$cam["descripcion"];
  }
  if(isset($_GET['nota'])) {
    $nota=$_GET['nota'];
    $sql="SELECT * FROM Notas_Predef WHERE id_nota='$nota'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res);
    $desplegar=$cam["nota"];
  }
  else $nota=0;
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de cotizaciones</title>
  </head>
  <body>
    <div style="margin:100px 0 0 25%;">
      <div id="agregarnota">Agregar notas
        <br><br>
      </div>
      <select style="background-color:white" id="nota" name="no_nota" required>
        <option style="background-color:#DADADA" disabled selected>
          Seleccione nota predeterminada
        </option>
        <option value="5">Nota 1(Nota libre)</option>
        <option value="1">Nota 2(que incluye)</option>
        <option value="2">Nota 3(flete)</option>
        <option value="3">Nota 4(garantia)</option>
        <option value="4">Nota 5(tiempo de entrega)</option>
      </select>
      <button onclick="nota()" id="botonp">Siguiente</button>
      <a href="notas.php"><button id="botonp">Atras</button></a>
      <br><br>
      <form action="editar_nota2.php" method="POST">
        <table width="500"  border="0px">
          <tr>
            <td width="80%">
              <div id="textBox" contenteditable="true" name="descripcion"></div>
              <textarea rows=5 cols=60 name="descripcion"required><?php
                  if(isset($_GET['nota'])) echo $desplegar;
                  if(isset($_GET['no_nota'])) echo $descripcion;
                ?></textarea>
            </td>
          </tr>
        </table>
        <input type="submit" value="Aceptar" id="botonp">
      </form>
    </div>
    <script src="tinymce/tinymce.min.js"></script>
    <script>
      function nota() {
        var valor=document.getElementById("nota").value;
        var dir="agregar_nota.php?nota=";
        var res=dir.concat(valor);
        window.location=res;
      }
      tinymce.init({
        selector:"textarea",
        plugins:[
          "advlist autolink autosave lists charmap print preview hr anchor",
          "searchreplace visualblocks visualchars code media nonbreaking",
          "directionality paste fullpage textcolor colorpicker textpattern"
        ],
        toolbar1:"bold italic underline strikethrough | forecolor",
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
  </body>
</html>
