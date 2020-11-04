<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="image.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit">upload</button>
	</form>
</body>
</html>