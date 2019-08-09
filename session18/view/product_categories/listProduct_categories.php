
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
