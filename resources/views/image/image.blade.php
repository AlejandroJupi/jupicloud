<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload</title>
	<style>
		input {
			display: block;
			margin: 5px;
		}
	</style>
</head>
<body>
	<form action="uploadimage" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="image" id="image" accept="image/*" />
		<input type="submit" value="Subir" />
</body>
</html>