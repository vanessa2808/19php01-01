 <?php  include 'connect.php' ?>

  <div class="content-wrapper">
    <h1>Shopping online</h1>
    <p>Welcome to our site. We hope you enjoy it and find it useful. Currently we have seven courses and a selection of feature items available. Over the next few years we are planning to create additional full and short courses at all levels of English. 

All our courses are designed to work on mobiles, tablets and desktop computers - so wherever you are, you will be able to enjoy studying English with the BBC Learning English team. If you are using a desktop, you can download audio mp3 files and pdf transcripts.

Over the next few months we plan to add new types of materials and new functionality to the website. </p>
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <section class="content">
       <?php
        include 'connect.php';
        $sql = "SELECT * FROM products";
        $result = mysqli_query($connect, $sql);
      ?>
	     <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table class="table table-bordered">
               
               <?php 
               if ($result->num_rows > 0) {
               	while($row = $result->fetch_assoc()) {
               		$id = $row['id'];
               ?>
               <div class="col-md-12">
                <table style="float: left;">
                   <th> <img style="height: 250px; float: left; margin-left: 30px; margin-top: 100px;" src="uploads/products/<?php echo $row['image']?>" alt="image" class="avatar_user"></th>
                  <th><?php  echo $row['name'] ;?></th>
                  <th>
                      <?php echo number_format($row['price'],2). '  VND'; ?>

                  </th>

                    
                </table>
                  </div>
	             

                  <?php ?>
                  
                <?php 
                	}
                } else {?>
              <?php  } ?>
            </div>
          </div>          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->