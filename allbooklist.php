<!-- allbooklist.php 显示所有书籍 -->
<?php require_once 'connections/conn.php';?>
<?php
MySQLi_query($conn,"set names 'utf8'");
$query_Book="select * from booktable";
$Book=MySQLi_query($conn,$query_Book) or die(mysql_error($conn));
$row_Book=mysqli_fetch_assoc($Book);
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
                    <font face="隶书" size="+4" color="#cccc00">网上书店</font>
                </td> 
               
            </tr>
            <tr>
                <td colspan="4" align="center">欢迎光临我们的网站</td>
		</tr>
		<tr>
		        <td width="15%" height="20%" align="left" valign="middle">
			    <a href="index.php">首页</a>
				</td>
				<td width="15%" height="20%" align="left" valign="middle">
			    <a href="allbooklist.php">所有图书</a>
		        </td>
				<td width="20%" height="20"><a href="allbooklist_pg.php">所有图书（分页）</a></td>
				<td width="15%" height="20" align="left " valign="middle">
			    <a href="addbook.php">插入书籍</a></td>
                <td width="20%" height="20" align="left " valign="middle">
			   		<a href="deletebook.php">编辑删除书籍</a></td>
		</tr>        
			
				        <tr>
                                <td colspan="5" align="center" height="50">书店所有图书</td>>
                            </tr>
                            <tr valign="middle">
                                <td align="center">书名</td>
                                <td align="center">作者</td>
                                <td align="center" colspan="2">图书类型</td>
                                <td align="center">图书价格</td>
                            </tr>
                           
                            <?php do{ ?>
                            <tr valign="middle" align="center"  height="50">
                                <td><?php echo $row_Book['bookname'];?></td>
                                <td><?php echo $row_Book['bookauthor'];?></td>
                                <td><?php echo $row_Book['booktype'];?></td>
                                <td><?php echo $row_Book['bookprice'];?></td>
                            </tr>
                            <?php }while ($row_Book= mysqli_fetch_assoc($Book));
                            ?>
                        </table>
                        </td>
                        <br />
                </tr>
            <tr>
			<td colspan="6"><table width="100%" border="0">
			</tr>
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
