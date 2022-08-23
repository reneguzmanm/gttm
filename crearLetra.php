<?php
   require('conexion.php');
   if(isset($_SESSION["id_usuario"])){
   header("Location: index.php");
   }

   if(!empty($_POST))
   {
      $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']);
      $tipo = mysqli_real_escape_string($mysqli,$_POST['tipo']);
      $tipo = intval($tipo);
      $mensaje = '';
      
      $sha1_pass = sha1($password);
      
      $sql = "insert into usuario (ID_TIPO,NOMBRE_USUARIO,PASS_USUARIO) values ($tipo,'$usuario','$sha1_pass')";
      $result=$mysqli->query($sql);
      if($result){
         $mensaje = "registro insertado";
      }else{
         $mensaje = "registro  NO insertado";
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
         <?php  include('mantenedorMenu.php') ?>
         <!-- /. NAV SIDE  -->
         <div id="page-wrapper" >
            
            <div id="page-inner">
               <div class="row">
                  <div class="col-md-12">
                     <input class="pull-right btn btn-primary" type="button" value="Regresar" onclick="history.back(-1)" />
                     <h2>Crear Usuarios</h2>
                     
                  </div>
               </div>
               <form action="#" role="form" method="POST">
                  <div class="box-body">
                     <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nombre usuario</label>
                        <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" placeholder="Ingresar usuario">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Contraseña">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Tipo de usuario</label>
                        <select name="tipo" class="form-control col-md-4">
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="C">C</option>
                           <option value="D">D</option>
                           <option value="E">E</option>
                           <option value="E">F</option>
                           <option value="G">G</option>
                           <option value="H">H</option>
                           <option value="I">I</option>
                           <option value="J">J</option>
                           <option value="K">K</option>
                        </select>
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
                  <div style = "font-size:16px; color:#cc0000;"><?php echo isset($mensaje) ? $mensaje : '' ; ?></div>
               </form>
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