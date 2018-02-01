<?php 
$con = new PDO('mysql:host=localhost;dbname=farhad', 'root', '');
if (isset($_GET['search'])) {
  $q = $_GET['search'];
  $statement = $con->prepare("select * from mytable where name like :name or email like :email");
  $statement->execute([
    ':name' => '%'.$q.'%',
    ':email' => '%'.$q.'%',
  ]);
} else {
  $statement = $con->prepare('select * from mytable');
  $statement->execute();
}
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>serach</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="card mt-5 ">
	<div class="card-header bg-dark text-white text-center">
		<h1>show search people</h1>
	</div>
<div class="card-body">
	<form action="" method="get">
		<div class="form-group">
			<div class="input-group">
				<input type="text" name="search" class="form-control">
				<button type="submit" class="btn btn-primary input-group-appned">search</button>
			</div>
		</div>
	</form>
 <table class="table table-bordered">
          <tr>
            <th>name</th>
            <th>email</th>
          </tr>
          <?php foreach ($people as $people): ?>
            <tr>
              <td><?php echo $people->name; ?></td>
              <td><?php echo $people->email; ?></td>
            </tr>
          <?php endforeach ?>
        </table>
</div>
</div>

</div>
</body>
</html>