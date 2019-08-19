<h2>Add product</h2>
<form action="admin.php?controller=product&action=add_product" method="POST" enctype="multipart/form-data">
	<p>Category
	<select name="product_category_id">
	<?php while($row = $categories->fetch_assoc()) {?>
		<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
	<?php }?>	
	</select>
	</p>
	<p>Name
	<input type="text" name="name">
	</p>
	<p>Description
	<textarea name="description" rows="10" cols="50"></textarea>
	</p>
	<p>Price
	<input type="text" name="price">
	</p>
	<p>Image
	<input type="file" name="image">
	</p>
	<input type="submit" name="add" value="Add product">
</form>