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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">GTTM admin</a> 
            </div>
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"><a href="php/logout.php" class="btn btn-danger square-btn-adjust">Salir</a> 
  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
        
          
                    <li>
                        <a class="active-menu"  href="adminIndex.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <input type="button" value="Regresar" onclick="history.back(-1)" />
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard - Listar Alumnos</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <div class="col-md-12 col-sm-12 col-xs-12">                 
                  <table class="table table-condensed">
                    <?php
                      $result = $mysqli->query("SELECT * FROM apoderado,alumno WHERE apoderado.ID_APODERADO = alumno.ID_APODERADO"); 
                      if ($row = $result->fetch_array(MYSQLI_ASSOC)){ ?>  
                         <table class="table table-condensed">
                            <tr>
                              <td>Nombre</td>
                              <td>Apellido Paterno</td>
                              <td>Apellido Materno</td>
                              <td>Nombre Apoderado</td>
                              <td>Eliminar</td>
                            </tr>
                        <?php do {
                            $id = $row["ID_ALUMNO"]; 
                            echo "<tr><td>".$row["NOMBRE_ALUMNO"]."</td><td>".$row["APELLIDOP_ALUMNO"]."</td><td>".$row["APELLIDOM_ALUMNO"]."</td><td>".$row["NOMBRE_APODERADO"]."</td><td>" ?><a href="eliminarAl.php?borrar=<?php echo $id; ?>"> <i class="glyphicon glyphicon-trash"></i> </a> <?php  "</td></tr> \n";
                         } while ($row = $result->fetch_array(MYSQLI_ASSOC)); ?>
                         </table> 
                    <?php  
                      } else { 
                      echo "?? No se ha encontrado ning??n registro !"; 
                      } 
                    ?>
                  </table>
              </div>

                <?php
                  if (isset($_GET['borrar'])) {
                    
                    $borrar_id = $_GET['borrar'];
                    $borrar = "DELETE FROM ALUMNO WHERE ID_ALUMNO='$borrar_id'"; 
                    $ejecutar = mysqli_query($mysqli, $borrar);
                    if ($ejecutar) {
                      echo "<script> alert('El usuario ha sido borrado!')</script>";
                      echo "<script> window.open('eliminarAl.php','_self')</script>";
                      
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