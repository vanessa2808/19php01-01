
            <div class="box-header with-border">
              <h3 class="box-title">List product categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
    <th style="width: 10px">#</th>
    <th>productName: </th>
    <th>Action:</th>
    
  </tr>
 <?php 
 if ($listProductCategories->num_rows > 0) {
 	while($row = $listProductCategories->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['productName']?></td>
      <td><a href="#">Edit</a> | <a href="admin.php?controller=product_categories&action=delete_product_categories&id=<?php echo $id;  ?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="3">Khong co product categories nao</td>
  </tr>
  <?php }?>
</table>
