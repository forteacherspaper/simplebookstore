<?php require_once('connections/conn.php'); ?>
<?php 
	if (insert($_GET['BookID'])) 
		$bookid=$_GET['BookID'];
	else{
		header('Location:deletebook.php');
	}
	$query_book="delete from booktable where bookid=".$bookid;
	$resault=mysql_query($conn,$query_book) or die(mysql_error($conn);
	mysqli_close($conn);
	if($resault){
		echo "<script>alert('É¾³ý³É¹¦£¡');</script>";
	}
	else{
		echo "<script>alert('É¾³ýÊ§°Ü£¡');</script>";
	}
 ?>
 <meta http-equiv="refresh" content="1;url=deletebook.php">

