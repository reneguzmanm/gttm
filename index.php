<?php
require('conexion.php');

if(!empty($_POST))
{
        $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
        $password = mysqli_real_escape_string($mysqli,$_POST['password']);
        $error = '';
        $sha1_pass = sha1($password);

        $sql = "SELECT * FROM usuario WHERE NOMBRE_USUARIO = '$usuario' ";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        echo $rows;
        if($rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id_usuario'] = $row['ID_USUARIO'];
        $_SESSION['tipo_usuario'] = $row['ID_TIPO'];
        $tipo = $row['ID_TIPO'];
        // 1=admin    2=contador 3=chofer
        switch ($tipo) {
        case 1:
            header("location: adminIndex.php");
        break;
        case 2:
            header("location: contadorIndex.php");
        break;
        case 3:
            header("location: choferIndex.php");
        break;
        }
        } else {
        $error = "El nombre o contraseña son incorrectos";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GTTM</title>
        <!--
        Strategy Template
        http://www.templatemo.com/tm-489-strategy
        -->
        <!-- load stylesheets -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
        <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="css/hero-slider-style.css">                                  <!-- Hero slider style -->
        <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section class="cd-hero">
            <ul class="cd-hero-slider autoplay">
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="tm-slide-content-div">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
                                <i class="fa fa-bus tm-slide-icon"></i>
                                <h2 class="text-uppercase">Login</h2>
                                <p class="tm-site-description">Login usuario</p>
                                <div class="form-group">
                                    <input type="text" style="margin-bottom: 50px;" class="form-control center-block tm-max-w-400" id="usuario" name="usuario" placeholder="Ingresar usuario...">
                                    <input type="password" class="form-control center-block tm-max-w-400"  id="password" name="password" placeholder="Ingresar contraseña...">
                                </div>
                                <button type="submit" class="cd-btn">Ingresar</button>
                            </form>
                            <div style="font-color:red;">
                                <?php echo isset($error) ? utf8_decode($error) : '';
                                ?>
                            </div>
                        </div>
                        </div> <!-- .cd-full-width -->
                    </li>
                </ul>
            </section>
            <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
            <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
            <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
            <script src="js/hero-slider-script.js"></script>            <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
            <script src="js/jquery.touchSwipe.min.js"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        </body>
    </html>