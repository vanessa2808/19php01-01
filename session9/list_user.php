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
  $query = "SELECT * FROM users limit $start_from,$number_per_page";
  $result = mysqli_query($connect, $query);
?>  <!-- Content Wrapper. Contains page content -->
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
              <h3 class="box-title">List users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th><input type="checkbox" name="check"></th>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Gender</th>
                  <th>avatar</th>
                  <th>City</th>
                  <th>date of birth</th>
                  <th>Action</th> 
                </tr>
                <tr>
                  <th><input type="checkbox" name="check"></th>
                  <th style="width: 10px"> </th>
                  <th><input type="text" name="inputName"></th>
                  <th><input type="text" name="inputEmail"></th>
                  <th><input type="text" name="inputPhone"></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
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
	                  <td><?php echo $row['name']?></td>
	                  <td>
	                    <?php echo $row['email']?>
	                  </td>
                    <td><?php echo $row['phone']?></td>
                     <td><?php echo $row['gender']?></td>
                     <td><img src="uploads/avatar/<?php echo $row['avatar']?>" alt="avatar" class="avatar_user"></td>
                     <td><?php echo $row['city']?></td>
                      <td><?php  echo $row['dateofbirth']; ?></td>
                      <td><a class="btn btn-block btn-primary" href="edit_user.php?id=<?php echo $id ?>"> Edit </a><a class="btn btn-block btn-primary" href="delete_user.php?id=<?php echo $id?>">Delete</a></button></td>


              
	                </tr>
                <?php 
                	}
                } else {?>
                <tr>
                	<td colspan="9">Khong co user nao</td>
                </tr>
                <?php }?>
              </table>
               <?php 
                $pr_query = "SELECT * FROM users";
                $pr_result = mysqli_query($connect, $pr_query);
                $totalrecords = mysqli_num_rows($pr_result);
                //echo $total_records;
                $totalPages = ceil($totalrecords/ $number_per_page);
                //echo $totalPage;
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo "<a class = 'btn btn-success' href='list_user.php?page=".$i."'>$i</a>";
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