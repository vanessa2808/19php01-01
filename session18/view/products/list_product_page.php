
<link rel="stylesheet" type="text/css" href="webroot/css/style.css">

 <?php 
 if ($listProduct->num_rows > 0) {
 	while($row = $listProduct->fetch_assoc()) {
 		$product_id = $row['product_id'];
 ?>
      <p><br/></p>
      <p><br/></p>
      <p><?php echo $row['name'];  ?></p>
  
         <p><img src="webroot/uploads/users<?php echo $row['image']?>" alt="image" class="avatar_user"></p>
       <p>
         <?php echo number_format($row['price'],3). '  VND'; ?>
        </p>
     
 
      <p><a href="index.php?controller=product&action=product_detail&product_id=<?php echo $product_id ?>">View Product Details</a> </p>

  <?php 
  	}
  } else {?>
  
  <?php }?>
</table>