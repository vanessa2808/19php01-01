<?php include 'common/header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <?php 
  require_once'connect.php';
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
 
  $number_per_page = 04;
  $start_from = ($page -1)* 04;
  $query = "SELECT * FROM products limit $start_from,$number_per_page";
  $result = mysqli_query($this->connect, $query);
?>
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        $result1 = mysqli_query($connect, $sql);
        $inputName = '';
        if (isset($_POST['search'])) {
          $inputName = $_POST['inputName'];
          $sql = "SELECT * FROM products WHERE name LIKE '%$inputName%'";
          $result1 = mysqli_query($connect, $sql);
          var_dump($sql);
        }
      ?>
	     <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <table>
                <tr>
              <th><h3 style="margin-right: 370px;" class="box-title">List products</h3></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th><a class="btn btn-block btn-primary" href="add_product.php">Insert</a></th>
                  <th><a class="btn btn-block btn-primary" href="#">Delete</a></th>
                  <th><a class="btn btn-block btn-primary" href="#">Print</a></th>

                </tr>
            </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th><input type="checkbox" name=""></th>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>description</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <th style="width: 10px"> </th>
                  <th></th>
                  <th><input type="text" name="inputName" value="<?php echo $inputName; ?>"></th>
                  <th><input type="text" name="inputDescription"></th>
                  <th><input type="text" name="inputPrice"></th>
                   <th></th>
                  <th><input type="text" name="inputCreated"></th>

              
                    
                  <th><button type="submit" name="search">Search</button></th>
                </tr>
               <?php 
               if ($result->num_rows > 0) {
               	while($row = $result->fetch_assoc()) {
               		$id = $row['id'];
               ?>
	                <tr>
                    <th><input type="checkbox" name=""></th>
	                  <td><?php echo $row['id']?></td>
	                  <td><?php echo $row['name']?></td>
                    <td><?php  echo $row['description'] ;?></td>
	                  <td>
                      <?php echo number_format($row['price'],2). '  VND'; ?>

	                  </td>
                    <td><img src="uploads/products/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
                     <td><?php echo $row['created']?></td>
	                  <td><a class="btn btn-block btn-primary" href="edit_product.php?id=<?php echo $id?>">Edit</a>  <a class="btn btn-block btn-primary" href="delete_product.php?id=<?php echo $id?>">Delete</a></td>
	                </tr>

                  <?php ?>
                  
                <?php 
                	}
                } else {?>


                <tr>
                	<td colspan="9">Khong co san pham nao</td>
                </tr>
                <?php }?>
              </table>
              <?php 
                $pr_query = "SELECT * FROM products";
                $pr_result = mysqli_query($this->connect, $pr_query);
                $totalrecords = mysqli_num_rows($pr_result);
                //echo $total_records;
                $totalPages = ceil($totalrecords/ $number_per_page);
                $last = $totalPages;
                //echo $totalPage;
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo "<a class = 'btn btn-success' href='list_product.php?page=".$i."'>$i</a>";

                }
                echo "<a class = 'btn btn-success'".$last.">>></a>";
               ?>
            </div>
          </div>          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>