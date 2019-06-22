
<?php 
    function checkExistNameProduct($name, $connect){
      $sql = "SELECT nameProduct FROM products WHERE nameProduct = '$nameProduct'";
      $result = mysqli_query($connect, $sql);
      return $result->num_rows;
    }
?>
