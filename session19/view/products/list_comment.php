
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>product_id: </th>
     <th>user_id:</th>
        <th>name: </th>

    <th>content: </th>
    <th>created</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($listComment->num_rows > 0) {
 	while($row = $listComment->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['product_id']?></td>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['name']?></td>
      
      <td><?php echo $row['content']?></td>
      <td><?php echo $row['created']?></td>
      <td>
              <?php if ($row['status'] == 0) {?>
                Đã approve 
              <?php } else {?>
                <a href="admin.php?controller=comment&action=approve_comment&id=<?php echo $id?>">Chưa approve</a>
              <?php }?>
            </td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="5">Khong co product nao</td>
  </tr>
  <?php }?>
</table>

