<?php include 'common/header.php';?>
  <!-- Content Wrapper. Contains page content -->
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
      <?php 
        include 'connect.php';
        $sql = "SELECT * FROM products";
        $result = mysqli_query($connect, $sql);

       ?>
	     This is list product page
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 10px">id</th>
                  <th>Name of product</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th> Image</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                <?php 
               if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $id = $row['id'];   
               ?>  
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nameProduct']?></td>
                    <td>
                      <?php echo $row['priceProduct']?>
                    </td>
                    <td><?php echo $row['description']?></td>
                    <td><img src="uploads/products/<?php echo $row['imageDe']?>" alt="image" class="avatar_user"></td>
                      <td><?php  echo $row['datePro']; ?></td>
                    <td><button class="green"><a href="edit_product.php?id=<?php echo $id ?>"> Edit </a></button> <button class="red"><a href="delete_product.php?id=<?php echo $id?>">Delete</a></button></td>
                  </tr>
                  <?php 
                }
              }else {?>
                <tr>
                  <td colspan="7">No existing products</td>
                </tr>
              <?php }?>
              </thead>
            </table>
          </div>
        </div>
      </div>
                


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>