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
  $query = "SELECT * FROM news limit $start_from,$number_per_page";
  $result = mysqli_query($connect, $query);
?>
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
                <th><input type="checkbox" name="check"></th>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>content</th>
                  <th>image</th>
                  <th>writer</th>
                  <th>post date</th>
                  <th>Action</th>
                </tr>
                 <tr>
                 	<th><input type="checkbox" name="check"></th>
                  <th style="width: 10px"> </th>
                  <th><input type="text" name="inputtitle"></th>
                  <th><input type="text" name="inputcontent"></th>
                  <th></th>
                  <th><input type="text" name="inputwriter"></th>
                   <th><input type="text" name="inputPostDate"></th>
                  <th><button class="btn btn-block btn-primary" name="search"> search </button></th>
                </tr>
               <?php 
               if ($result->num_rows > 0) {
               	while($row = $result->fetch_assoc()) {
               		$id = $row['id'];
               ?>
	                <tr>
	                	<th><input type="checkbox" name="check"></th>
	                  <td><?php echo $row['id']?></td>
	                  <td><?php echo $row['title']?></td>
	                  <td>
                      <?php  echo $row['content'];  ?>

	                  </td>
	                  
                    <td><img src="uploads/news/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
                    <td><?php echo $row['writer']; ?></td>
                     <td><?php echo $row['postDate']?></td>
	                  <td><a class="btn btn-block btn-primary" href="edit_product.php?id=<?php echo $id?>">Edit</a>  <a class="btn btn-block btn-primary" href="delete_product.php?id=<?php echo $id?>">Delete</a></td>
	                </tr>
                <?php 
                	}
                } else {?>
                <tr>
                	<td colspan="7">Khong co tin moi nao</td>
                </tr>
                <?php }?>
              </table>
               <?php 
                $pr_query = "SELECT * FROM news";
                $pr_result = mysqli_query($connect, $pr_query);
                $totalrecords = mysqli_num_rows($pr_result);
                //echo $total_records;
                $totalPages = ceil($totalrecords/ $number_per_page);
                //echo $totalPage;
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo "<a class = 'btn btn-success' href='list_news.php?page=".$i."'>$i</a>";
                }

               ?>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>