
            <div class="box-header with-border">
              <h3 class="box-title">List users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
    <th style="width: 10px">#</th>
    <th>Username</th>
    <th>Role</th>
    <th>Avatar</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($listUser->num_rows > 0) {
  while($row = $listUser->fetch_assoc()) {
    $id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['username']?></td>
        <td><?php echo $row['role']?></td>
        <td><img style="width: 100px; " src="webroot/uploads/users/<?php echo $row['avatar'] ?>"></td>
        <td><a href="admin.php?controller=user&action=edit_user&id=<?php echo $id ?>">Edit</a> | <a href="admin.php?controller=user&action=delete_user&id=<?php echo $id ?>">Delete</a></td>
    </tr>
  <?php 
    }
  } else {?>
  <tr>
    <td colspan="4">Khong co user nao</td>
  </tr>
  <?php }?>
</table>
