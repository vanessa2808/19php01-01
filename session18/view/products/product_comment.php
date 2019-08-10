<?php 
 if ($listComment->num_rows > 0) {
  while($row = $listComment->fetch_assoc()) {
    $id = $row['id'];
    

 ?>
      <p><br/></p>
      <p><br/></p>
      <p>comment-id: <?php echo $row['id']; ?></p>
      <p>user-id: <?php echo $row['user_id']; ?></p>
          <p>product-id: <?php echo $row['product_id']; ?></p>
         <p>content: <?php echo $row['content'];  ?></p>

     
 
      

  <?php 
    }
  } else {?>
  
  <?php }?>
