<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ElectronicLH | Administrador </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/adminlte.css">
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/blue.css">
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/morris.css">
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/datepicker3.css">
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/daterangepicker-bs3.css">
  <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/bootstrap3-wysihtml5.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?=Yii::app()->user->name." ".Yii::app()->user->lastname;?></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?=Yii::app()->request->baseUrl;?>/admin/logout" class="dropdown-item dropdown-footer">Desconectarse</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=Yii::app()->request->baseUrl;?>/admin" class="brand-link">
      <img src="<?=Yii::app()->request->baseUrl;?>/img/LHogo.png" alt="ElectronicaLH" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ElectronicaLH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <li class="nav-header">Configurar</li>
              <li class="nav-item ">
                <a href="<?=Yii::app()->request->baseUrl;?>/ofertas" class="nav-link <?=(Yii::app()->getController()->getAction()->controller->id=='productsoffers'?'active':'');?>">
                  <i class="nav-icon fa fa-shopping-cart"></i>
                  <p>Ofertas</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="<?=Yii::app()->request->baseUrl;?>/ofertas" class="nav-link <?=(Yii::app()->getController()->getAction()->controller->id=='otro'?'active':'');?>">
                  <i class="nav-icon fa fa-file"></i>
                  <p>Categorias</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $content; ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="<?=Yii::app()->request->baseUrl;?>">ElectronicaLH</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/electronicalh.min.js'); ?>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

</body>
</html>
