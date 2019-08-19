<br/>
<br/>
<h1>ProductDetail</h1>
<div class="list_product">
	<div class="productDetail">
		<br/>
			<h2><?php echo $productDetail['name']?></h2>
			<p><?php echo  $productDetail['description'];  ?></p>
			<p><?php echo $productDetail['price']?> VND</p>
			<img src="webroot/uploads/products/<?php echo $productDetail['image']?>">
			<a href="index.php?controller=product&action=buy&id=<?php echo $productDetail['id']?>">GO TO BASKET</a>
	</div>
</div>
	<div class="comment_content">
		<form action="index.php?controller=comment&action=add_comment" method="POST">
			<input type="hidden" name="user_id" value="<?php echo $productDetail['id'] ?>">
			<input type="hidden" name="product_id" value="<?php echo $productDetail['id']?>">
			<textarea cols="100" rows="10" name="content"></textarea>
			<p>
				<input type="submit" name="comment" value="Comment">
			</p>
		</form>
	</div>
	
</div>
<div class="comment">
	<div class="comment_list">
	<?php
		if ($commentList->num_rows > 0){
			while ($comment = $commentList->fetch_assoc()) {
	  	$id = $comment['id'];
 	?>
		<div class="comment_detail" style="border: 1px solid black; height: 80px;">
			<div class="comment_author">username:<?php echo $comment['username']?></div>
			<div class="comment_connent_detail">Content:<?php echo $comment['content']?></div>
			<div class="comment_time">Created:<?php echo $comment['created']?></div>
			<div class="setting"><a href="index.php?controller=comment&action=delete_comment&id=<?php echo $id ?>">delete</a>
				<a href="index.php?controller=comment&action=edit_comment&id=<?php echo $id  ?>">    |   edit</a>
				<a href="index.php?controller=comment&action=like_comment&id=<?php echo $id  ?>">    |   Like</a>
			</div>
		</div>
	<?php }?>
	<?php }else {?>
		<div class="comment_detail">
			<p>----------------------------------------------------------------------------------</p>
			<p>No comment</p>

		</div>
	<?php }?>

	</div>