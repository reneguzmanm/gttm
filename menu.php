<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="adminIndex.php">GTTM admin</a>
   </div>
   <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Salir</a>
</div>
</nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
   <ul class="nav" id="main-menu">
      <li class="text-center">
         <img src="assets/img/find_user.png" class="user-image img-responsive"/>
      </li>
      <li class="treeview">
         <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
         </a>
         <ul class="treeview-menu">
            <li><a href="adminIndex.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
         </ul>
      </li>
      <li class="treeview">
         <a href="#">
            <i class="fa fa-dashboard"></i> <span>Usuarios</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
         </a>
         <ul class="treeview-menu">
            <li><a href="crearUs.php"><i class="fa fa-circle-o"></i> Crear Usuarios</a></li>
            <li><a href="listarUs.php"><i class="fa fa-circle-o"></i> Listar Usuarios</a></li>
         </ul>
      </li>
      <li class="treeview">
         <a href="#">
            <i class="fa fa-dashboard"></i> <span>Alumnos</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
         </a>
         <ul class="treeview-menu">
            <li><a href="agregarAp.php"><i class="fa fa-circle-o"></i>Crear alumnos</a></li>
            <li><a href="listarAl.php"><i class="fa fa-circle-o"></i>Listar Alumnos</a></li>
         </ul>
      </li>
   </ul>
   
</div>
</nav>