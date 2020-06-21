这是删除图书信息页面
这是闫静茹新增的一行文字
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
		echo "<script>alert('删除成功！');</script>";
	}
	else{
		echo "<script>alert('删除失败！');</script>";
	}
 ?>
 <meta http-equiv="refresh" content="1;url=deletebook.php">
