<<?php 
$message='';
if (isset($_FILES['file'])) {
 	$file=$_FILES['file'];
 	$name=$file['name'];
 	$source=$file['tmp_name'];
 	$ex_name=explode(".", $name);
 	$exantion=end($ex_name);
 	$sup_ext=['zip', 'jpeg', 'PNG'];
 		if (!file_exists('hello')) {
 		mkdir('hello');
 	}
 	$destination='hello/'.$name;
 	if (in_array($exantion, $sup_ext )) {
 	move_uploaded_file($source, $destination);
 	$message='you have successfully uploaded';
 	}
 	else{
 		$message='your file type not support';
 	}
 	
 } ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>file upload</title>
 </head>
 <body>
 	   <?php if (!empty($message)): ?>
          <div >
            <?= $message; ?>
          </div>
        <?php endif ?>

 <form action="" method="post" enctype="multipart/form-data">
 	<label for="file">file</label>
 	<input type="file" name="file" id="file"/>
 	<button type="submit">upload</button>

 </form>
 </body>
 </html>