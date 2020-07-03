<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>网上书店</title>
</head> 
<body bgcolor="#f4f4f4">
	<table width="100%" border="0" align="center">
		<tr>
			<td width="27%" height="68" rowspan="2">
				<img width="200" height="106" src="images/book_logo.jpg"/>
			</td>
			<td height="68" colspan="4">
				<font face="隶书" size="+4" color="#cccc00">网上书店</font>
			</td>
			<td width="10%" rowspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" align="center">欢迎光临我们的网站</td>
		</tr>
		<tr>
			<td width="15%" height="20" align="left" valign="middle">
				<a href="index.php">首页</a>
			</td>
			<td width="15%" height="20%" align="left" valign="middle">
			    <a href="allbooklist.php">所有图书</a>
		        </td>
			<td width="20%" height="20"><a href="allbooklist_pg.php">所有图书（分页）</a></td>
			<td width="15%" height="20" align="left " valign="middle">
			    <a href="addbook.php">插入书籍</a>
			</td>		   
			<td width="20%" height="20" align="left " valign="middle">
			    <a href="deletebook.php">编辑删除书籍</a>
			</td>
			<td width="15%" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td height="169" colspan="6" align="center">
                            <form id="forml" name="forml" method="post" action="showbook.php">
                                请选择要查找的书籍类型：
                                <select name="BookType" id="BookType">
                                    <option value="1">计算机类图书</option>
                                    <option value="2">医药类图书</option> 
                                    <option value="3">外语类图书</option>
                                </select>
                                <p><input type="submit" name="submit" value="提交"/></p>
                            </form>
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
			</td>
		</tr>
		
		</tr>
	</table>
</body>
</html>
