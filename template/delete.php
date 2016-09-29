<?php
if(!isset($_GET)['pid'])){
	header("location:index.php");
}
require("sql_connect.php");
$qry = mysqli_query($mysqli, "DELETE FROM products WHERE productID = ".$_GET['pid']);

if($qry){
	header("location: index.php");
}else{
	echo "Failed to Delete!";
	exit();
}

?>