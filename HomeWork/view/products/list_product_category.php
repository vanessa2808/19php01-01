
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
        <th>name: </th>
        <th>Action</th>
  </tr>
 <?php 
 if ($listProductCategory->num_rows > 0) {
  while($row = $listProductCategory->fetch_assoc()) {
    $id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><a href="admin.php?controller=product&action=edit_product_category&id=<?php echo $id  ?>">Edit</a> | <a href="admin.php?controller=product&action=delete_product_category&id=<?php echo $id ?>">Delete</a></s></td>
  <?php 
    }
  } else {?>
  <tr>
    <td colspan="5">Khong co product nao</td>
  </tr>
  <?php }?>
</table>

