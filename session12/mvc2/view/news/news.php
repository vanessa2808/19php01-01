<h1>news page here</h1>
<a href="index.php?action=add_news">Add news</a>
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Title</th>
    <th>Description</th>
    <th>avatar</th>
    <th>Created</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($newsList->num_rows > 0) {
 	while($row = $newsList->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php  echo $row['id']?></td>
      <td><?php echo $row['title']?></td>
      <td>
        <?php echo $row['description']?>
      </td>
      <td><img src="uploads/<?php echo $row['avatar']?>" alt="image" class="avatar_user"></td>
       <td><?php echo $row['created']?></td>
      <td><a href="index.php?action=edit_news&id=<?php echo $id?>">Edit</a> | <a href="index.php?action=delete_news&id=<?php echo $id?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co san pham nao</td>
  </tr>
  <?php }?>
</table>



