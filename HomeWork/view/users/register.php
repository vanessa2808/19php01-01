<link rel="stylesheet" type="text/css" href="webroot/css/register_style.css">

<div class="container">
<br/>
<br/>
<br/>


<p class="error"><?php
    $errorExistUser =' ';
 echo $errorExistUser?></p>
<?php 
    $username = $password = $name = $email =$phone = $birthday = '';
?>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form action="index.php?controller=user&action=register" method="POST" enctype="multipart/form-data" >

     <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select"  name="role" style="max-width: 120px;" >
            <option value="admin">Admin</option>
            <option value="customer">Customer</option>
        </select>
    </div> <!-- form-group// -->


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="username" class="form-control" placeholder="username e.g: Vanessa2808" value="<?php echo $username ?>" type="text">
    </div> <!-- form-group// -->
     <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" name="password" placeholder="Create password" value="<?php echo $password ?>" type="password">
    </div>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="name" class="form-control" placeholder="full name" value="<?php echo $name ?>" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" class="form-control" placeholder="Email address" value="<?php echo $email  ?>" type="email">
    </div> <!-- form-group// -->
     <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="phone" class="form-control" placeholder="phone number" value="<?php echo $phone ?>" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="birthday" class="form-control" value="<?php echo $birthday ?>" placeholder="" type="date">
    </div> <!-- form-group// -->



    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="avatar" class="form-control" placeholder="" type="file">
    </div> <!-- form-group// -->

                                    
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="register" > Create Account  </button>
    </div> <!-- form-group// -->   


    <p class="text-center">Have an account? <a href="index.php?controller=user&action=login">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
