<h1>edit new page</h1>
<form action="index.php?action=edit_news&id=<?php echo $id ?>" method="post">
	<p>Title: 
		<input type="text" name="title" value="<?php echo $editNews['title'] ?>">

	</p>
	<p>Description
		<textarea name="description" rows="8"><?php echo $editNews['description']?></textarea>
	</p>
	<p>Image:
		<input type="file" name="avatar"<?php echo $editNews['avatar']; ?>>		
	</p>
	<p>Created:
		<input type="text" name="created"<?php echo $editNews['created'];  ?>>
	</p>
	<p><input type="submit" name="edit_news_form"></p>






</form>