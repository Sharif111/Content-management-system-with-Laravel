<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Create new Post</h2>
	<form action="<?php echo route('post.store') ?>" method="POST">
		@csrf
		<input type="text" name="title"><br/>
		<textarea name="content" id="" cols="30" rows="10"></textarea><br/>
		<input type="submit" value="Add New Post">
	</form>

</body>
</html>
