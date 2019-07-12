<h1>Add product page</h1>
<?php
	include_once '../mvc2/config/connectdb.php';
      $name = $description = $price = $image ='';


?>
<form action="index.php?action=edit_product" method="post">
	<p>Product name
		<input type="text" name="name" requried value="<?php echo $name; ?>">
	</p>
	<p>Description
		<textarea name="description"  rows="8" ></textarea>
		<?php echo $description; ?>
	</p>
	<p>Product price
		<input type="text" name="price" value="<?php echo $price ?>">
	</p>
	<p> Image
		<input type="file" name="avatar" value="<?php echo $avatar ?>">
	</p>
	<p><input type="submit" name="edit_product_form" value="Update product"></p>

</form>