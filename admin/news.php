<?php
include("config/path.php");
if(isset($_GET["del_id"]))
{
	mysql_query("delete from news where id='".$_GET["del_id"]."'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
说明：1.国际新闻	2.国内新闻	3.哈埠新闻	4.卓联新闻	5.其他新闻<br/>
操作：添加、删除
<br/>
<table style="width:700px;">
	<tr>
    	<td style="50px;">编号</td>
        <td style="50px;">类型</td>
        <td style="50px;">标题</td>
        <td style="50px;">作者</td>
        <td style="50px;">时间</td>
        <td style="100px;">操作</td>
        
    </tr>
    <?php
    	$res=mysql_query("select id,type,title,writer,time,content from news");
		$i=0;
		while($row=mysql_fetch_array($res))
		{$i++;
	?>		
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row["type"];?></td>
            <td><?php echo $row["title"];?></td>
            <td><?php echo $row["writer"];?></td>
            <td><?php echo $row["time"];?></td>
            <td><a href="news.php?del_id=<?php echo $row["id"];?>">删除</a></td>
        </tr>
            
    <?php
		}
	?>
</table>
</body>
</html>