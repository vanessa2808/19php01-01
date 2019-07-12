<h1>Edit product page</h1>
<form action="index.php?action=edit_product&id=<?php echo $id?>" method="post">
	<p>Product name
		<input type="text" name="name" value="<?php echo $editProduct['name']?>">
	</p>
	<p>Description
		<textarea name="description" rows="8"><?php echo $editProduct['description']?></textarea>
	</p>
	<p>Product price
		<input type="text" name="price" value="<?php echo $editProduct['price']?>">
	</p>
	<p><input type="submit" name="edit_product_form" value="Edit product"></p>
</form>