<h1>Products page here</h1>
<a href="index.php?action=add_product">Add product</a>
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Created</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($productList->num_rows > 0) {
 	while($row = $productList->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td>
        <?php echo $row['price']?>
      </td>
      <td><img src="uploads/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
       <td><?php echo $row['created']?></td>
      <td><a href="index.php?action=edit_product&id=<?php echo $id?>">Edit</a> | <a href="index.php?action=delete_product&id=<?php echo $id?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co san pham nao</td>
  </tr>
  <?php }?>
</table>