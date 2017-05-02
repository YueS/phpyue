<?php
include("config/path.php");
if(isset($_POST["submit"]))
{
	//echo $_POST["type"].",".$_POST["title"].",".$_POST["writer"].",".$_POST["time"].",".$_POST["image"].",".$_POST["content"];
	mysql_query("insert into news(type,title,writer,time,image,content) values (".$_POST["type"].",".$_POST["title"].",".$_POST["writer"].",".$_POST["time"].",".$_POST["image"].",".$_POST["content"].")");
	echo "<script>alert('添加成功！');</script>";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
说明：1.国际新闻	2.国内新闻	3.哈埠新闻	4.卓联新闻	5.其他新闻<br/>
操作：添加、删除
<form action="add_news.php" method="post">
	新闻种类：<select name="type">
    	<option value="1">国际</option>
        <option value="2">国内</option>
        <option value="3">哈埠</option>
        <option value="4">卓联</option>
        <option value="5">其他</option>
    </select><br/><br/>
    新闻标题：<input type="text" name="title"/><br/><br/>
    新闻作者：<input type="writer" name="writer"/><br/><br/>
    发布时间：<input type="text" name="time"/><br/><br/>
    图片路径：<input type="text" name="image"/><br/><br/>
    新闻内容：<textarea name="content"></textarea><br/><br/>
    <input type="submit" name="submit" value="添加"/>
</form>
</body>
</html>