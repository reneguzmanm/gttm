<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="mantenedorIndex.html">GTTM admin</a>
   </div>
   <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">  &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Salir</a>
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
            <i class="fa fa-dashboard"></i> <span>Usuario</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
         </a>
         <ul class="treeview-menu">
            <li><a href="crearUs.php"><i class="fa fa-circle-o"></i> Crear Usuario</a></li>
            <li><a href="listarUs.php"><i class="fa fa-circle-o"></i> Listar Usuario</a></li>
         </ul>
      </li>
      <li class="treeview">
         <a href="#">
            <i class="fa fa-dashboard"></i> <span>Colegio</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
         </a>
         <ul class="treeview-menu">
            <li><a href="crearColegio.php"><i class="fa fa-circle-o"></i>Crear Colegio</a></li>
            <li><a href="listarColegio.php"><i class="fa fa-circle-o"></i>Listar Colegio</a></li>
         </ul>
      </li>
      
      <li class="treeview">
         <a href="#">
            <i class="fa fa-dashboard"></i> <span>Curso</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
         </a>
         <ul class="treeview-menu">
            <li><a href="crearCurso.php"><i class="fa fa-circle-o"></i>Crear Curso</a></li>
            <li><a href="listarCurso.php"><i class="fa fa-circle-o"></i>Listar Curso</a></li>
         </ul>
      </li>
      
   </ul>
   
</div>
</nav>