<?php
   require('conexion.php');
   if(isset($_SESSION["id_usuario"])){
   header("Location: index.php");
   }

   if(!empty($_POST))
   {
      $colegio = mysqli_real_escape_string($mysqli,$_POST['colegio']);
      $nivel = mysqli_real_escape_string($mysqli,$_POST['nivel']);
      $letra = mysqli_real_escape_string($mysqli,$_POST['letra']);
      $id_col = intval($colegio);
      $mensaje = '';
      
      $sql = "insert into curso (ID_COLEGIO,NIVEL_CURSO, LETRA_CURSO) values ($id_col,'$nivel','$letra')";
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
      <link href="assets/js/morris/omrris-0.4.3.min.css" rel="stylesheet" />
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
                     <h2>Crear Curso</h2>
                     
                  </div>
               </div>
               <form action="#" role="form" method="POST">
                  <div class="box-body">
                     
                     <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Nivel</label>
                        <select name="colegio" class="form-control col-md-4">
                          <?php
                              require('conexion.php');
                              $result = $mysqli->query("SELECT * FROM colegio");
                              
                              if ($result) 
                              while ($valor = mysqli_fetch_array($result)) {
                                echo "<option value=".$valor['ID_COLEGIO'].">".$valor['NOMBRE_COLEGIO']."</option>";
                              }
                           ?>
                        </select>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Nivel</label>
                        <select name="nivel" class="form-control col-md-4">
                           <option value="PK">PK</option>
                           <option value="K">K</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                        </select>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Letra</label>
                        <select name="letra" class="form-control col-md-4">
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