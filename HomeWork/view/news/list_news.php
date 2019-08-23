

              <table class="table table-bordered">
                <tr>
    <th style="width: 10px">#</th>
    <th>title: </th>
    <th>description</th>
    <th>Image</th>
    <th>Writer:</th>
    <th>Created</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($listNews->num_rows > 0) {
 	while($row = $listNews->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['description'];  ?></td>
       <td><img style="height: 100px" src="webroot/uploads/news/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
       <td><?php echo  $row['writer']; ?></td>
      <td><?php echo $row['created'];  ?></td>
      <td><a href="admin.php?controller=new&action=edit_new&id=<?php echo $id ?>">Edit</a> | <a href="admin.php?controller=new&action=delete_new&id=<?php echo $id;  ?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co user nao</td>
  </tr>
  <?php }?>
</table>


