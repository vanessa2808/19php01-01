<br/>
<br/>
<div class="list_new">
	<div class="newDetail" style="margin-left: 50px">
		<br/>
		<br/>
			<h2><?php echo $newDetail['title']?></h2>
			<img style="height: 400px;" src="webroot/uploads/news/<?php echo $newDetail['image']?>">
			<br/>
			<br/>
			<p><?php echo $newDetail['description']?> </p>
			<p><?php echo $newDetail['writer']; ?></p>
			<p><?php echo $newDetail['created']; ?></p>
			
	</div>
</div>
	<div class="comment_content">
		<form action="index.php?controller=comment&action=add_comment" method="POST">
			<input type="hidden" name="user_id" value="<?php echo $newDetail['id'] ?>">
			<input type="hidden" name="product_id" value="<?php echo $newDetail['id']?>">
			<br/>
			<textarea cols="60" rows="5" name="content"></textarea>
			<p>
				<input type="submit" name="comment" value="Comment">
			</p>
		</form>
	</div>
<div class="comment">
	<div class="comment_list">
	<?php
		if ($commentList->num_rows > 0){
			while ($comment = $commentList->fetch_assoc()) {
	  	$id = $comment['id'];
 	?>
		<div class="comment_detail" style="border: 1px solid black; height: 130px; color: blue">
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