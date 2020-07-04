﻿<?php require_once('connections/conn.php'); ?>
<?php 
	if (isset($_GET['BookID'])) {
		$bookid=$_GET['BookID'];
	}
	else{
		header("Location:deletebook.php");
		# code...
	}
	$query_book="delete from booktable where bookid=".$bookid;
	$resault=mysqli_query($conn,$query_book) or die(mysqli_error($conn));
	mysqli_close($conn);
	if($resault){
		echo "<script>alert('删除成功！');</script>";
	}
	else{
		echo "<script>alert('删除失败！');</script>";
	}
?>
<meta http-equiv="refresh" content="1;url=deletebook.php">