<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
    <title>新增书籍</title>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center">
        <tr>
            <td width="27%" height="68" rowspan="2">
                
            </td>
	<td hight="68" colspan="4">
            <font face="隶书" size="+4" color="#cccc00">网上书店</font>
	</td>
	<td width="10%" rowspan="2">&nbsp;</td>
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
                <a href="addbook.php">插入书籍</a>
            </td>		   
            <td width="20%" height="20" align="left " valign="middle">
		<a href="deletebook.php">编辑删除书籍</a>
            </td>
        </tr>
        <tr>
            <td height="169" colspan="6" align="center">
                <form id="form1" name="form1" method="post" action="insertSuccess.php">
                    <table width="100%" border="0" align="center">
                        <tr align="center"><td width="60%">插入书籍</td></tr>
                        <tr>
                            <td width="40%" align="right" valign="middle">书籍名称:</td>
                            <td align="left" valign="middle"><input name="BookName" type="text" id="BookName"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" valign="middle">书籍作者:</td>
                            <td align="left" valign="middle"><input name="BookAuthor" type="text" id="BookAuthor"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" valign="middle">书籍价格:</td>
                            <td align="left" valign="middle"><input name="BookPrice" type="text" id="BookPrice"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" valign="middle">书籍类型:</td>
                                    <td align="left" valign="middle"><select name="BookType" id="BookType">
                                            <option value="1">计算机类</option>
                                            <option value="2">医学类</option>
                                            <option value="3">外语类</option>
                                    </select></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" valign="middle"><input type="submit" name="submit" value="提交"/></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="6"><table align="center">
                <hr>
                <tr>
                    <td align="center" valign="middle">Copyright@2020</td>
                </tr>
                <tr>
                    <td align="center" valign="middle">Email:123456@XXXX.com</td>
                </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

