
<link rel="stylesheet" type="text/css" href="webroot/css/style.css">

 <?php 
 if ($productDetail->num_rows > 0) {
 	while($row = $productDetail->fetch_assoc()) {
 		$id = $row['id'];
 ?>
      <p><br/></p>
      <p><br/></p>
      <p><?php echo $row['name'];  ?></p>
  
         <p><img src="webroot/uploads/users<?php echo $row['image']?>" alt="image" class="avatar_user"></p>
       <p>
         <?php echo number_format($row['price'],3). '  VND'; ?>
        </p>
        <p><?php echo $row['price'];  ?></p>
         <p><?php echo $row['description'];  ?></p>
     
 
      <p><a href="index.php?controller=product&action=buyProduct&id=<?php echo $id ?>">BUY</a> </p>
      

  <?php 
  	}
  } else {?>
  
  <?php }?>
  <?php  include 'View/products/comment.php'; ?>

   
