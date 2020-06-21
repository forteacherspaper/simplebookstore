<?php require_once 'connection/conn.php';?>
<?php
    $Result1=false;  //假设插入不成功
    if(isset($_POST['BookName'])){
        $bookname=$_POST['BookName'];
        $bookauthor=$_POST['BookAuthor'];
        $bookprice=$_POST['BookPrice'];
        $booktype=$_POST['BookType'];
        $insertSQL="insert into booktable(bookname,bookauthor,booktype,bookprice) values('$bookname','$bookauthor',$booktype,$bookprice'";
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_errno($conn));
    }
    mysqli_close($conn);
    if($Result1){
        echo "<script>alter('插入成功！')；</script>";
    }else{
        echo "<script>alter('插入失败！')；</script>";
    }
?>
<meta http-equiv="refresh" content="1； url=querybook.php">


