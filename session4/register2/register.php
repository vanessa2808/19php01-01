<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="css/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PHP</b>01</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>19PHP</b>01</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../yen.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Vanessa</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../yen.jpg" class="img-circle" alt="User Image">

                <p>
                  Vanessa Nguyen - Web Developer
                  <small>Member since Nov. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../yen.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Vanessa Nguyen</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="register.php"><i class="fa fa-circle-o"></i> Register</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> List users</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> List users</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rigister form
        <small>Give for user</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <?php 
      $errClassName = $errClassEmail = $errClassPhone = $errClassAvatar = $errClassGender = $errClassCity = $errClassDay = '';
      $errTextName = $errTextEmail = $errTextPhone = $errTextAvatar= $errTextGender = $errTextCity = $errTextDay = '';
      $name = $email = $phone = $avatar = $gender = $city = $dayOfBirth = '';
      if (isset($_POST['register'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $dayOfBirth = $_POST['dayOfBirth'];
        if ($name == '') {
          $errClassName = 'has-error';
          $errTextName = 'Please input your name';
        }
        if($email == '') {
          $errClassEmail = 'has-error';
          $errTextEmail = 'Please input your email';
        }
        if($phone == '') {
          $errClassPhone = 'has-error';
          $errTextPhone = 'Please input your phone';
        }
         if($dayOfBirth == '') {
          $errClassDay = 'has-error';
          $errTextDay = 'Please input your date of birth';
        }
        if($avatar == '') {
          $errClassAvatar = 'has-error';
          $errTextAvatar = 'Please input your avatar';
        }
        if($gender == '') {
          $errClassGender = 'has-error';
          $errTextGender = 'Please input your gender';
        }
        if($city == '') {
          $errClassCity = 'has-error';
          $errTextCity = 'Please input your city';
        }
      }
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Register form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group <?php echo $errClassName;?>">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" name="name" value="<?php echo $name;?>">
                  <span class="help-block"><?php echo $errTextName;?></span>
                </div>
                <div class="form-group <?php echo $errClassEmail;?>">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $email;?>">
                    <span class="help-block"><?php echo $errTextEmail;?></span>
                </div>
                <div class="form-group <?php echo $errClassPhone;?>">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter phone" name="phone" value="<?php echo $phone;?>">
                   <span class="help-block"><?php echo $errTextPhone;?></span>
                </div>
                 <div class="form-group <?php echo $errClassDay?>">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="dayOfBirth" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?php echo $dayOfBirth ?>">
                </div>
              <span class="help-block"><?php echo $errTextDay;?></span>
              </div>
                <div class="form-group <?php echo $errClassAvatar ?>">
                  <label for="exampleInputFile">Avatar</label>
                  <input type="file" id="exampleInputFile" class="form-control" name="avatar" value="<?php echo $avatar; ?>">
                  <span class="help-block"><?php echo $errTextAvatar;?></span>
                </div>
                <!-- radio -->
                <div class="form-group <?php echo $errClassGender ?>">
                  <label>
                    <input value="male" type="radio" name="gender" class="minimal" <?php echo $gender == 'male' ? 'checked' : ''?>>Male
                  </label>
                  <label>
                    <input value="female" type="radio" name="gender" class="minimal"<?php echo $gender == 'female' ? 'checked':''?>>Female
                  </label>
                  <label>
                    <input value="other" type="radio" name="gender" class="minimal" <?php echo $gender == 'other' ? 'checked':''?>>Other
                  </label>
                  <span class="help-block"><?php echo $errTextGender;?></span>
                </div>
              <div class="form-group <?php echo $errClassCity ?> ">
                <label>City</label>
                <select class="form-control select2" style="width: 100%;" name="city">
                  <option value="" >Choose city</option>
                  <option value="alaska" <?php echo $city == 'alaska' ? 'selected' : '' ?> >Alaska</option>
                  <option value="california" <?php echo $city == 'california' ? 'selected' : '' ?>>California</option>
                  <option value="delaware" <?php echo $city == 'delaware' ? 'selected' : '' ?>>Delaware</option>
                </select>
                <span class="help-block"><?php echo $errTextCity;?></span>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="register" value="1">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 19php01 <a href="#">SDC</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="js/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js"></script>
</body>
</html>
