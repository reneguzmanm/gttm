<?php
require('conexion.php');

if(isset($_SESSION["id_usuario"])){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GTTM - Administrador</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div id="wrapper">
      <!-- Menu-->
      <?php  include('menu.php') ?>
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper" >
        <input type="button" value="Regresar" onclick="history.back(-1)" />
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h2>Admin Dashboard - Listar Usuarios</h2>
            </div>
          </div>
          <!-- /. ROW  -->
          <hr />
          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-condensed">
              <?php
              $result = $mysqli->query("SELECT * FROM usuario,tipousuario WHERE usuario.ID_TIPO = tipousuario.ID_TIPO");
              if ($row = $result->fetch_array(MYSQLI_ASSOC)){ ?>
              <table class="table table-condensed">
                <tr>
                  <td>Tipo</td>
                  <td>Nombre</td>
                  <td>Eliminar</td>
                </tr>
                <?php do {
                echo "<tr><td>".$row["NOMBRE_TIPO"]."</td><td>".$row["NOMBRE_USUARIO"]."</td><td>" ?><a href="listarUs.php?borrar=<?php echo $row["ID_USUARIO"]; ?>"> <i class="glyphicon glyphicon-trash"></i> </a> <?php  "</td></tr> \n";
                } while ($row = $result->fetch_array(MYSQLI_ASSOC)); ?>
              </table>
              <?php
              } else {
              echo "¡ No se ha encontrado ningún registro !";
              }
              ?>
            </table>
          </div>
           <?php
                  if (isset($_GET['borrar'])) {
                    
                    $borrar_id = $_GET['borrar'];
                    $borrar = "DELETE FROM USUARIO WHERE ID_USUARIO='$borrar_id'"; 
                    $ejecutar = mysqli_query($mysqli, $borrar);
                    if ($ejecutar) {
                      echo "<script> alert('El usuario ha sido borrado!')</script>";
                      echo "<script> window.open('listarUs.php','_self')</script>";
                      
                    }
                    else{
                      echo "<script> alert('El usuario NO ha sido borrado!')</script>";
                    }
                  }
                ?>
          <!-- /. ROW  -->
          <hr />
        </div>
      </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    
  </body>
</html>