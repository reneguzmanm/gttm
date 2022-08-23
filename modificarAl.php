<?php
    require('conexion.php');
    
    if(isset($_SESSION["id_usuario"])){
        header("Location: index.php");
    }

    if (isset($_POST['id2'])) {
                            
      $id2 = mysqli_real_escape_string($mysqli,$_POST['id2']);
      $id_al = intval($id2);
      $nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
      $apaterno = mysqli_real_escape_string($mysqli,$_POST['apaterno']);
      $amaterno = mysqli_real_escape_string($mysqli,$_POST['amaterno']);

      
      $sql = " UPDATE alumno SET NOMBRE_ALUMNO='".$nombre."',APELLIDOP_ALUMNO='".$apaterno."',APELLIDOM_ALUMNO='".$amaterno."' WHERE ID_ALUMNO= $id_al "; 
      $result = $mysqli->query($sql);

       if($result){
           header("Location: listarAl.php");
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
                          $sql = "SELECT * FROM ALUMNO WHERE ID_ALUMNO='$id'"; 
                          $result = $mysqli->query($sql);
                          $fila = $result->fetch_assoc();
                        }
                      ?>

                      <form action="#" role="form" method="POST">
                        <input type="hidden" class="form-control" name="id2"  value="<?php echo $fila['ID_ALUMNO']; ?>">
                          <div class="box-body">                       
                           <div class="form-group col-md-4">
                              <label for="exampleInputEmail1">Nombre</label>
                              <input type="text" class="form-control" name="nombre"  value="<?php echo $fila['NOMBRE_ALUMNO']; ?>">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="exampleInputPassword1">Apellido Paterno</label>
                              <input type="text" class="form-control" name="apaterno"   value="<?php echo $fila['APELLIDOP_ALUMNO']; ?>">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="exampleInputPassword1">Apellido Materno</label>
                              <input type="text" class="form-control" name="amaterno"  value="<?php echo $fila['APELLIDOM_ALUMNO']; ?>">
                           </div>
                           
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                           <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
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