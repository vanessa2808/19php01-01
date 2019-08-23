


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
      <td><img style="width: 100px;" src="webroot/uploads/products/<?php echo $row['image']?>"></td>
      <td><?php echo $row['product_category_name']?></td>
      <td><a href="admin.php?controller=product&action=edit_product&id=<?php echo $id  ?>">Edit</a> | <a href="admin.php?controller=product&action=delete_product&id=<?php echo $id  ?>">Delete</a></td>
    </tr>
  <?php 
    }
  } else {?>
  <tr>
    <td colspan="8">Khong co user nao</td>
  </tr>
  <?php }?>
</table>