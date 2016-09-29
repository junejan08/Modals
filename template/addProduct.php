<html>
<head>
	<title>Hardware List</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
<?php include("navbar.php"); ?>
<h2 class="text-center">Insert Product</h2>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class='panel panel-primary'>
			<div class='panel-heading'>
				<h3 class='panel-title'>Insert New Hardware</h3>
			</div>
			<div class="panel-body">
				<form method='POST' action='insert.php' enctype='multipart/form-data'>
					<input type='text' name='pname' class='form-control' placeholder='Product'>
					<input type='text' name='pbrand' class='form-control' placeholder='Product Brand'>
					<input type='text' name='pqty' class='form-control' placeholder='Product Price'>
					<input type='file' name='pphoto' class='form-control'>
					<button class='btn btn-success pull-right'>Submit</button>
				</form>
			</div>
	</div>
</div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>