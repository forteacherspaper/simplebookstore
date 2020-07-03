<?php require_once 'connections/conn.php';?>
<?php
$pageRows=6;
$page=1;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
MySQLi_query($conn,"set names 'utf8'");
$query_Book="select * from booktable";
$all_Book= mysqli_query($conn, $query_Book);
$totalRows= mysqli_num_rows($all_Book);
$totalPages=ceil($totalRows/$pageRows);
//
if($page<1) $page=1;
if($page>$totalPages) $page=$totalPages;
$startRow=($page-1)*$pageRows;
//
$query_limit= sprintf("%s limit %d,%d",$query_Book,$startRow,$pageRows);
$Book= mysqli_query($conn, $query_limit) or die(mysqli_errno($conn));
$row_Book= mysqli_fetch_assoc($Book);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
<title>网上书店</title>
</head>
    <body bgcolor="#f4f4f4">
        <table width="100%" border="0" align="center"/>
            <tr>
                <td width="27%" height="68" rowspan="2">
                <img width="200" height="106" src="images/book_logo.jpg"/>
                </td>
                <td hight="68" colspan="4">
                    <font face="隶书" size="+4" color="darkcyan">网上书店</font>
                </td> 
               
            </tr>
            <tr>
                <td colspan="4" align="center">欢迎光临我们的网站</td>
			</tr>
			<tr>
		        <td width="15%" height="100" align="left" valign="middle">
			    <a href="index.php">首页</a>
				</td>
				<td width="15%" height="100" align="left" valign="middle">
			    <a href="allbooklist.php">所有图书</a>
		        </td>
                <td width="20%" height="20"><a href="allbooklist_pg.php">所有图书（分页）</a></td>
				<td width="15%" height="20" align="left " valign="middle">
			    <a href="addbook.php">插入书籍</a>
				</td>
                <td width="20%" height="20" align="left " valign="middle">
			    <a href="deletebook.php">编辑删除书籍</a>
				</td>
				
			</tr>
			<tr>
        		<td colspan="5" align="center">书店所有图书</td>>
            </tr>
            <tr valign="middle" height="50">
                                <td align="center">书名</td>
                                <td align="center">作者</td>
                                <td align="center" colspan="2">图书类型</td>
                                <td align="center">图书价格</td>
            </tr>
                            <?php do{ ?>
                            <tr valign="middle" align="center" height="50">
                                <td><?php echo $row_Book['bookname']; ?></td>
                                <td><?php echo $row_Book['bookauthor'];?></td>
                                <td><?php echo $row_Book['booktype'];?></td>
                                <td><?php echo $row_Book['bookprice'];?></td>
                            </tr>
                            <?php }while ($row_Book= mysqli_fetch_assoc($Book));
                            ?>
            
                       	  <tr align="center">
							 <td >
								<?php
								    if($page==1)echo "首页";
								    else{
								        echo "<a href='allbooklist_pg.php?page=1'>首页</a>";
									}
								?>
			                </td>
							  <td colspan="2">
								<?php
								   if($page==1) echo "上一页";
								       else{
								       $newpage=$page-1;
								       echo "<a href='allbooklist_pg.php?page={$newpage}'>上一页</a>";
									   }
								?>
							 </td>
               				 <td>
								<?php 
									if($page==$totalPages) echo "下一页";
							   			 else{
									        $newpage=$page+1;
									        echo "<a href='allbooklist_pg.php?page={$newpage}'>下一页</a>";
										 }
								?>
			                </td>
			                <td>
								<?php
								   if($page==$totalPages) echo "尾页";
								   else{
								        $newpage=$totalPages;
								        echo "<a href='allbooklist_pg.php?page={$newpage}'>尾页</a>";
								   }
								?>
             </td>
            </tr>
            <tr>
                <td colspan="6"><table width="100%" border="0">
                        <hr>
                            <tr>
                                <td align="center" valign="middle">Copyright@2006 lanmo</td>
                            </tr>
                            <tr>
				<td align="center" valign="middle">XXX Email:lanmo@myweb.com </td>
                            </tr>
                            </table>
			
    </body>
    </html>
