<div class="list_product">
<?php 
 	while($row = $listProduct->fetch_assoc()) {
 		$id = $row['id'];
?>
	<div class="detail_product">
		<h2><a href="index.php?controller=product&action=product_detail&id=<?php echo $id?>"><?php echo $row['name']?></a></h2>
		
		<p><?php echo $row['price']?> VND</p>
		<p>Category: <?php echo $row['product_category_name']?></p>
		<img src="webroot/uploads/products/<?php echo $row['image']?>">
	</div>
<?php }?>
</div>