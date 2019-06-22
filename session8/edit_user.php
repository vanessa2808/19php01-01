<?php include 'common/header.php';   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit the product</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit the product
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit the product</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<div class="form">
<h1>Edit the users</h1>
  <?php 
      include 'connect.php';
      // lay thong tin cu cua user can edit
      $id = $_GET['id'];
      $sql = "SELECT * FROM users WHERE id = $id";
      $editUser = mysqli_query($connect, $sql);
      $row = $editUser->fetch_assoc();
      $errClassName = $errClassEmail = $errClassPhone = $errClassAvatar = $errClassGender = $errClassCity = $errClassDay = '';
      $errTextName = $errTextEmail = $errTextPhone = $errTextAvatar= $errTextGender = $errTextCity = $errTextDay = '';
      $name = $email = $phone = $avatar = $gender = $city = $dateofbirth = $register = '';
      if (isset($_POST['edit'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];
         $phone = $_POST['phone'];
         $dateofbirth = $_POST['dateofbirth'];
        // chuyen dinh dang bithday sang Nam-thang-ngay
        $dateofbirth = date("Y-m-d", strtotime($dateofbirth));
         $gender  = isset($_POST['gender'])?$_POST['gender']:'';
         $city = $_POST['city'];
           $avatar = 'default.png';
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
         if($dateofbirth == '') {
          $errClassDay = 'has-error';
          $errTextDay = 'Please input your date of birth';
        }
        if($gender == '') {
          $errClassGender = 'has-error';
          $errTextGender = 'Please input your gender';
        }
         if($avatar == '') {
          $errClassAvatar = 'has-error';
          $errTextavatar = 'Please input your avatar';
        }
        if($city == '') {
          $errClassCity = 'has-error';
          $errTextCity = 'Please input your city';
        }
        if ($name != '' && $email != '' && $phone !='' && $gender!='' && $avatar !='' && $city != '' && $dateofbirth != '') {
           if ($_FILES['avatar']['error'] == 0) {
            $avatar = uniqid().'_'.$_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/avatar/'.$avatar);
          }
         $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', dateofbirth = '$dateofbirth', gender = '$gender', avatar = '$avatar', city = '$city' WHERE id ='$id'";
          if (mysqli_query($connect, $sql) === TRUE) {
            // chuyen trang trong PHP
            header("Location: list_user.php");
          }
        }
      }
    ?>

        
<div>
    <form role="form" action="#" method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="name" required value="<?php echo $row['name'];?>">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>
        <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required value="<?php echo $row['email'];?>">
            <span class="help-block"><?php echo $errTextEmail;?></span>
        </div>
        <div class="form-group <?php echo $errClassPhone;?>">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter phone" name="phone" required value="<?php echo $row['phone'];?>">
           <span class="help-block"><?php echo $errTextPhone;?></span>
        </div>


        <div class="form-group <?php echo $errClassDay ?>">
        <label>Date:</label>

        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" name="dateofbirth" required value="<?php echo $row['dateofbirth']  ?>"   id="birthday">

        </div>
        <span class="help-block"><?php echo $errTextDay;?></span>
        <!-- /.input group -->
      </div>



        <div class="form-group <?php echo $errClassAvatar ?>">
          <label for="exampleInputFile">Avatar</label>
          <input type="file" id="exampleInputFile" class="form-control" name="avatar" required value="<?php echo $row['avatar']  ?>" value="<?php echo $avatar; ?>">
          <span class="help-block"><?php echo $errTextAvatar;?></span>
        </div>
        <!-- radio -->
        <div class="form-group <?php echo $errClassGender ?> value = <?php echo $row['avatar']  ?>">
          <label>
            <input value="male" type="radio" name="gender"   class="minimal" <?php echo $row['gender'] == 'male' ? 'checked' : ''?>>Male
          </label>
          <label>
            <input value="female" type="radio" name="gender" class="minimal"<?php echo $row['gender'] == 'female' ? 'checked':''?>>Female
          </label>
          <label>
            <input value="other" type="radio" name="gender" class="minimal" <?php echo $row['gender'] == 'other' ? 'checked':''?>>Other
          </label>
          <span class="help-block"><?php echo $errTextGender;?></span>
        </div>
      <div class="form-group <?php echo $row['city'] ?> ">
        <label>City</label>
        <select class="form-control select2" style="width: 100%;" name="city">
          <option value="" >Choose city</option>
          <option value="alaska" <?php echo $row['city'] == 'alaska' ? 'selected' : '' ?>>Alaska</option>
          <option value="california" <?php echo $row['city'] == 'california' ? 'selected' : '' ?>>California</option>
          <option value="delaware" <?php echo $row['city'] == 'delaware' ? 'selected' : '' ?>>Delaware</option>
        </select>
        <span class="help-block"><?php echo $errTextCity;?></span>
      </div>
      <div class="box-footer">
          <button type="submit" class="btn btn-primary" name="edit">Update</button>
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  <?php include 'common/footer.php';?>
  </body>
  </html>