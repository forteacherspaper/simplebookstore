<!--index.php -->
<!DOCTYPE html html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "HTTP://www.w3.org/TR/xhtmll/dtd/xhtmll-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Context-type" charset="utf-8" />
		<title></title>
		<style type="text/css">
			h1{
	color:#8694AF ;
	}
#Nav{
	padding:20px; font-size: 18px; font-weight: 900;
    }
.select{
	font-weight: 900; 
	}
#div1{
     animation: 12s wacthtv infinite;
	 width: 2000px;
	 height: 1000px;
	}
#div1 img{
		float:left;
		}
#tv{
		align-content: center;
		width: 500px;
		height: 200px;
		overflow: hidden;
		margin-left: 100px;
		}
@keyframes wacthtv{
		0%{}
		25%{transform: translateX(0px);}
		30%{transform: translateX(-500px);}
		50%{transform: translateX(-500px);}
		55%{transform: translateX(-1000px);}
        	75%{transform: translateX(-1000px);}
		80%{transform: translateX(-1500px);}
		100%{transform: translateX(-1500px);}
		}
		</style>
		
	</head>
	<body>
		<table border="0" cellspacing="0"  align="center" width="700" height="500">
			<tr>
				<td align="center"><img src="img/pic/7.jpg"  width="250" height="200"/></td>
				<td width="400"><p align="center"><font color="#8694AF" size="7" face="楷体" ><b> 网上书店</b></font></p>
				</td>
			</tr>
			<tr>
				<td colspan="2" height="100">
					<div align="center"  >
						<span id="Nav">首页</span>
						<span id="Nav"><a href="所有图书">所有图书</a></span>
						<span id="Nav"><a href="allbook.php"></a>所有图书（分页）</span>
						<span id="Nav"><a href="addbook.php"></a>插入书籍</span>
						<span id="Nav"><a href="deletebook.php"></a>编辑删除图书</span>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div id="tv">
						<div id="div1" >
							<img src="img/pic/3.jpg" width="500" height="200"  >
							<img src="img/pic/4.jpg" width="500" height="200">
							<img src="img/pic/5.jpg" width="500" height="200">
							<img src="img/pic/6.jpg" width="500" height="200" >
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"align="center" height="100">
                                    <form action="bookinfolist.php"  method="post" class="select">请选择要查找的书籍类型：
						<select name="books" >
							<option value="1">外语类籍</option>
							<option value="2">计算机类籍</option>
							<option value="3">医药类籍</option>
							<option value="4">娱乐类籍</option>
							<option value="5">军事类籍</option>
					    </select>
					    <input type="submit " name="submit" value="提交" />
				</form>
                                </td>
			</tr>
		</table>
	</body>
</html>
