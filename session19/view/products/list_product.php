<p><a href="admin.php?controller=product&action=add_product">Add product</a></p>
<p><a href="admin.php?controller=product&action=add_product_category">Add product category</a></p>
<p><a href="admin.php?controller=comment&action=list_comment">List comment</a></p>
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($listProduct->num_rows > 0) {
 	while($row = $listProduct->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['price']?></td>
      <td><img src="webroot/uploads/products/<?php echo $row['image']?>"></td>
      <td><?php echo $row['product_category_name']?></td>
      <td><a href="admin.php?controller=product&action=edit_product&id=<?php echo $id  ?>">Edit</a> | <a href="admin.php?controller=product&action=delete_product&id=<?php echo $id  ?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="5">Khong co product nao</td>
  </tr>
  <?php }?>
</table>