<br/>
<a href="index.php?action=add_news">Add news</a>
<?php include 'common/header.php';  ?>



  <!-- Content Wrapper. Contains page content -->
 
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
                  <th>description</th>
                  <th>image</th>
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
                 
                </tr>
               <?php 
               if ($newsList->num_rows > 0) {
                while($row = $newsList->fetch_assoc()) {
                  $id = $row['id'];
               ?>
                  <tr>
                    <th><input type="checkbox" name="check"></th>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['title']?></td>
                    <td>
                      <?php  echo $row['description'];  ?>

                    </td>
                    
                    <td><img src="uploads/news/<?php echo $row['avatar']?>" alt="image" class="avatar_user"></td>
                     <td><?php echo $row['created']?></td>
                    <td><a href="index.php?action=edit_news&id=<?php echo $id?>">Edit</a> | <a href="index.php?action=delete_news&id=<?php echo $id?>">Delete</a></td>
                  </tr>
                <?php 
                  }
                } else {?>
                <tr>
                  <td colspan="7">Khong co tin moi nao</td>
                </tr>
                <?php }?>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <?php  include 'common/footer.php'; ?> 
  <!-- /.content-wrapper -->

  