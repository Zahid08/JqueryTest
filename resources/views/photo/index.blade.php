<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Upload Photo</h2>
	
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		Choose File: <input type="file" name="pic">
		<br/><br/>
		<input type="submit" value="Upload">
	</form>
	
</body>
</html>