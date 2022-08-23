<?php
    require('conexion.php');
    
    if(isset($_SESSION["id_usuario"])){
        header("Location: index.php");
    }

    if (isset($_POST['id2'])) {
                            
      $id2 = mysqli_real_escape_string($mysqli,$_POST['id2']);
      $id_US = intval($id2);
      $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']);
      $tipo = mysqli_real_escape_string($mysqli,$_POST['tipo']);
      $tipo = intval($tipo);

      $sha1_pass = sha1($password);

      
      $sql = " UPDATE usuario SET NOMBRE_USUARIO='".$usuario."',PASS_USUARIO='".$sha1_pass."',ID_TIPO='".$tipo."' WHERE ID_USUARIO= $id_US "; 
      $result = $mysqli->query($sql);

       if($result){
           header("Location: listarUs.php");
        }
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
      <!-- menu -->
      <?php  include('menu.php') ?> 
      <!-- fin menu -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <input type="button" value="Regresar" class="btn btn-primary pull-right" onclick="history.back(-1)" />

                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard - Modificar Alumnos</h2>
                     <?php
                        if (isset($_GET['id'])) {
                          
                          $id = $_GET['id'];

                          $sql = "SELECT * FROM usuario WHERE ID_USUARIO='$id'"; 
                          $result = $mysqli->query($sql);
                          $fila = $result->fetch_assoc();
                        }
                      ?>

                      <form action="#" role="form" method="POST">
                        <input type="hidden" class="form-control" name="id2"  value="<?php echo $fila['ID_USUARIO']; ?>">

                  <div class="box-body">
                     <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nombre usuario</label>
                        <input type="text" class="form-control" name="usuario" value="<?php echo $fila['NOMBRE_USUARIO']; ?>">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Tipo de usuario</label>
                        <select name="tipo" class="form-control col-md-4">
                           <option value="2">Contador</option>
                           <option value="3">Chofer</option>
                        </select>
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Modificar</button>
                  </div>
                  <div style = "font-size:16px; color:#cc0000;"><?php echo isset($mensaje) ? $mensaje : '' ; ?></div>
               </form>
                    </div>
                </div>   
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