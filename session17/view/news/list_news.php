<?php include 'common/header.php';?>
<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List news</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
    <th style="width: 10px">#</th>
    <th>title: </th>
    <th>description</th>
    <th>Image</th>
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
       <td><img src="uploads/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
      <td><?php echo $row['created'];  ?></td>
      <td><a href="admin.php?controller=news&action=edit_news&id=<?php echo $id ?>">Edit</a> | <a href="admin.php?controller=news&action=delete_news&id=<?php echo $id;  ?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co user nao</td>
  </tr>
  <?php }?>
</table>
  <?php include 'common/footer.php';?>