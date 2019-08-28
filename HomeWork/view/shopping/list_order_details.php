
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>order_id:</th>
     <th>product_id:</th>
    <th>quantity</th>
    <th>price</th>
    <th>Delete order details</th>
  </tr>
 <?php 
 if ($listOrderDetail->num_rows > 0) {
 	while($row = $listOrderDetail->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['order_id']; ?></td>
      <td><?php echo $row['product_id']; ?></td>
      <td><?php echo $row['quantity']?></td>
      <td><?php echo $row['price']; ?></td>
      <td><a href="admin.php?controller=order&action=delete_order">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="5">Khong co product nao</td>
  </tr>
  <?php }?>
</table>

