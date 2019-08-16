
<form action="admin.php?controller=product&action=edit_product&id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
	
	<!-- edit product category -->
	<p>Name
	<input type="text" name="name" required value="<?php echo $editProduct['name'] ?>">
	</p>
	<p>Description
	<textarea name="description" rows="10" cols="50">
		<?php echo $editProduct['description'];  ?>
	</textarea>
	
	</p>
	<p>Price
	<input type="text" name="price" required value="<?php echo $editProduct['price'] ?>">
	</p>
	<p>Image
	<input type="file" name="image" src="webroot/uploads/products<?php echo $editProduct['image']?>">
	</p>
	<input type="submit" name="edit_product" value="Update product">
</form>