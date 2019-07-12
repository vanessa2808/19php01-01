<h1>Add product page</h1>
<form action="index.php?action=add_product" method="post">
	<p>Product name
		<input type="text" name="name">
	</p>
	<p>Description
		<textarea name="description" rows="8"></textarea>
	</p>
	<p>Product price
		<input type="text" name="price">
	</p>
	<p><input type="submit" name="add_product_form" value="Add product"></p>
</form>