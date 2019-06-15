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
<h1>Edit the product</h1>
<?php
      $update = false;
         $errClassName = $errClassEmail = $errClassPhone = $errClassAvatar = $errClassGender = $errClassCity = $errClassDay = '';
      $errTextName = $errTextEmail = $errTextPhone = $errTextAvatar= $errTextGender = $errTextCity = $errTextDay = '';
      $name = $email = $phone = $avatar = $gender = $city = $dayOfBirth = $register = '';
      if (isset($_POST['register'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender  = isset($_POST['gender'])?$_POST['gender']:'';
        $city = $_POST['city'];
        // $dayOfBirth = $_POST['dayOfBirth'];
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
        if ($register) {
          //upload avatar
          //echo "<pre>";
          //var_dump($_FILES['avatar']);
          if ($_FILES['avatar']['error'] == 0) {
            $avatarName = uniqid().'-'.$_FILES['avatar']['name'];
            $pathUpload = 'uploads/'.$avatarName;
            move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload);
          }
        }
      }
    ?>
<div>
  
<form name="form" method="POST" action=""> 
    <input type="hidden" name="new" value="1" />
    <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <form role="form" action="#" method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="name" value="<?php echo $row['name'];?>">
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


        <div class="form-group <?php echo $errClassDay ?>">
        <label>Date:</label>

        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" name="dayOfBirth"  id="birthday">

        </div>
        <span class="help-block"><?php echo $errTextDay;?></span>
        <!-- /.input group -->
      </div>



        <div class="form-group <?php echo $errClassAvatar ?>">
          <label for="exampleInputFile">Avatar</label>
          <input type="file" id="exampleInputFile" class="form-control" name="avatar"  value="<?php echo $avatar; ?>">
          <span class="help-block"><?php echo $errTextAvatar;?></span>
        </div>
        <!-- radio -->
        <div class="form-group <?php echo $errClassGender ?>">
          <label>
            <input value="male" type="radio" name="gender"  class="minimal" <?php echo $gender == 'male' ? 'checked' : ''?>>Male
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
        <select class="form-control select2"   style="width: 100%;" name="city">
          <option value="" >Choose city</option>
          <option value="alaska" <?php echo $city == 'alaska' ? 'selected' : '' ?> >Alaska</option>
          <option value="california" <?php echo $city == 'california' ? 'selected' : '' ?>>California</option>
          <option value="delaware" <?php echo $city == 'delaware' ? 'selected' : '' ?>>Delaware</option>
        </select>
        <span class="help-block"><?php echo $errTextCity;?></span>
      </div>
      <!-- /.box-body -->
      <?php if($update == true) : 
         header("Location: list_user.php");
       ?>
       <button type="submit" class="btn btn-info" name="update">Update</button>
       <?php else:  ?>
          <button type="submit" class="btn btn-info" name="update">Update</button>
        <?php endif;  ?>

    </form>
  </div>
  </div>
  <?php
include 'connect.php';
$id = $_GET['id']; 
$query = "SELECT * FROM users WHERE id = $id"; 
$result = mysqli_query($connect, $query);
echo "<pre>";
print_r($result);
echo "<pre>";
die();
$row = mysql_fetch_array($result);
mysql_close();
?>

  
}
?>

  <?php include 'common/footer.php';?>
  </body>
  </html>