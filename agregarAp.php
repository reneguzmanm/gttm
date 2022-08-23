    <?php
require('conexion.php');
if(isset($_SESSION["id_usuario"])){
        header("Location: index.php");
    }

        if (!empty($_POST)) {
          $nombreAp=mysqli_real_escape_string($mysqli,$_POST['nombreAp']);
          $apellidoApP=mysqli_real_escape_string($mysqli,$_POST['apellidoApP']);
          $apellidoApM=mysqli_real_escape_string($mysqli,$_POST['apellidoApM']);
          $direccionAp=mysqli_real_escape_string($mysqli,$_POST['direccionAp']);
          $numeroCalle=mysqli_real_escape_string($mysqli,$_POST['numeroCalle']);
          $numeroDepto=mysqli_real_escape_string($mysqli,$_POST['numeroDepto']);
          $comuna=mysqli_real_escape_string($mysqli,$_POST['comuna']);
          $telefonoAp=mysqli_real_escape_string($mysqli,$_POST['telefonoAp']);
          $venciPago=mysqli_real_escape_string($mysqli,$_POST['venciPago']);
          $coutaAp=mysqli_real_escape_string($mysqli,$_POST['coutaAp']);
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
          <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="php/logout.php" class="btn btn-danger square-btn-adjust">Salir</a> 
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
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
               <h2>Admin Dashboard - Agregar apoderado</h2>   
               <h5>Ingrese los datos del usuario que desea agregar</h5>
             </div>
           </div>              
           <!-- /. ROW  -->
           <hr />
           <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-6"> 
              <form method="post" action="crearAp.php">
                <input type="text-center" class="form-control" name="nombreAp" placeholder="Nombre apoderado"></br>
                <input type="text-center" class="form-control" name="apellidoApP" placeholder="Apellido paterno"></br>
                <input type="text-center" class="form-control" name="apellioApM" placeholder="Apellido materno"></br>
                <input type="text-center" class="form-control" name="direccionAp" placeholder="Calle"></br>
                <input type="number" min="0" class="form-control" name="numeroCalle" placeholder="Numero calle"></br>
                <input type="number" min="0" class="form-control" name="numeroDepto" placeholder="Numero departamento"></br>

                <select class="form-control" name="comuna" placeholder="Comuna">
                  <option value="0">Seleccione</option>

                  <?php
                  require('conexion.php');
                            $sql = $mysqli -> query ('SELECT * FROM comuna');
                  while ($valores = mysqli_fetch_array($sql)) {
                  echo '<option value="'.$valores['ID_COMUNA'].'">'.$valores['NOMBRE_COMUNA'].'</option>';
                  } 
                          
                  ?>
                  </select></br>
                  <input type="number" min="0" max="999999999"  class="form-control" name="telefonoAp" placeholder="Telefono"></br>
                  <label>Vencimiento de pago</label></br>
                  <input type="date" min="0" class="form-control" name="venciPago" placeholder="Vencimiento Pago"></br>
                  <input type="number" min="0" class="form-control" name="coutaAp" placeholder="Cuota mensual"></br>
                  <button type="submit" class="btn btn-primary" name="registrar"> Registrar </button>
                </form>
                <form action="../adminIndex.html">
                 <div class="col-md-2 col-sm-2 col-xs-2" style="margin-top: 50px;"> 
                  <button type="button" class="btn btn-warning" name="volver"> Volver </button>
                </div>
              </form>
              
       
            </div>  
            <!-- /. ROW  -->
            <hr />  
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
