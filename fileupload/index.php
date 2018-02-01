<?php 
if (isset($_FILES['file'])) {
	$file=$_FILES['file'];
	$name=$file['name'];
	$source=$file['tmp_name'];
	if (!file_exists("farhad")) {
		mkdir('farhad');
	}
	$destination='farhad/' .$name;
	move_uploaded_file($source, $destination);
}




?><!DOCTYPE html>
<html>
<head>
	<title>file upload</title>
	 <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h1>file uploading</h1>
		</div>
	<div class="card-body">
		<form action="" method="post" enctype="multipart/form-data">
	 <div class="form-group">
	 	<label for="file"><mark">please uplaod  a file</mark></label>
	 	<input type="file" name="file" id="file" class="form-control">
	 	<button type="submit" class="btn btn-outline-primary">upload</button>
	 </div>
	</form>
	</div>
</div>
</div>
</body>
</html>