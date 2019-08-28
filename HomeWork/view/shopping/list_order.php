
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
     <th>user_id:</th>
    <th>created</th>
    <th>Action</th>
    <th>Delete comment</th>
  </tr>
 <?php 
 if ($listOrder->num_rows > 0) {
 	while($row = $listOrder->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['created']?></td>
      <td>
              <?php if ($row['status'] == 0) {?>
                Đã approve 
              <?php } else {?>
                <a href="admin.php?controller=order&action=approve_order&id=<?php echo $id?>">Chưa approve</a>
              <?php }?>

            </td>
            <td><a href="admin.php?controller=order&action=delete_order&id=<?php echo $id ?>">Delete comment</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="5">Khong co product nao</td>
  </tr>
  <?php }?>
</table>

