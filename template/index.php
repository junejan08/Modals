<?php
include("sql_connect.php");
?>
<html>
<head>
	<title>Hardware List</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
	<style>
		th{
			text-align: center;	
		}
		button{
			margin-right:5px;
		}
		.modal-content{
			padding:20px;
		}
	</style>
</head>
<body>
<?php include("navbar.php"); ?>
<h2 class="text-center">Hardware List</h2>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table table-bordered">	
			<th>ID</th>
			<th>Item</th>
			<th>Price</th>
			<th>Option</th>

			<?php
			$result = mysqli_query($mysqli, "SELECT * FROM product");

			$names = array();
			$price = array();
			$desc = array();
			if($result){
				$index = 0;
				while($row = mysqli_fetch_array($result)){
					$names[] = $row[1];
					$price[] = $row[2];
					$desc[] = $row[3];
					echo "<tr>";
						echo "<td align='center'>".$row[0]."</td>";
						echo "<td align='center'>".$row[1]."</td>";
	
						echo "<td align='center'>".$row[2]."</td>";
						echo "<td align='center'>";

						echo "<button class='btn btn-sm btn-primary' alt='".$index++."'><span class='glyphicon glyphicon-eye-open'></span></button>";

						echo "<a href='edit.php?pid=".$row[0]."'><button class='btn btn-sm btn-warning'><span class='glyphicon glyphicon-pencil'></span></button></a>";

						echo "<a href='delete.php?pid=".$row[0]."'><button class='btn btn-sm btn-danger'><span class='glyphicon glyphicon-remove' class='check'></span></button></a>";

					echo "</td>";
					echo "</tr>";
				}
			}
			?>
		</table>
	</div>
	</div>
	<div class='modal fade myModal' tab-index='-1' role='dialog' aria-labelledby='myModal'>
			<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
					<p><strong>Name:</strong><span class='mod_name'></span></p>
					<p><strong>Price:</strong><span class='price'></span></p>
					<p><strong>Description:</strong><span class='desc'></span></p>
				</div>
			</div>
	</div>
</div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script>
var  names = [<?php echo "'".join("','",$names)."'";?>];
var price = [<?php echo join(",",$price)?>];
var  desc = [<?php echo "'".join("','",$desc)."'";?>];

	$(document).ready(function() {
		$(".check").on("click", function() {
			return confirm("Are you sure?");
		});

		$(".btn-primary").on("click", function() {
			var i = $(this).attr("alt");
			var productName = names[i];
			var prodPrice = price[i];
			var prodDesc = desc[i];
			$(".mod_name").text(productName);
			$(".price").text(prodPrice);
			$(".desc").text(prodDesc);
			$(".modal").modal("show");
		});


	});
</script>