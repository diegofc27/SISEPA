<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
<form action="ImportContratos" method="post" enctype="multipart/form-data">
	<label>Upload File: </label>
	<input type="file" name="file">
	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
	<input type="submit" name="Upload">

</form>
</body>
</html>