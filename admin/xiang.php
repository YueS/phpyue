<?php 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>


<form action="xiang.php" method="get"  >
输入版块fid：<input type="text"  name="fid" />
<input type="submit" name="submit1" value="查询" />
</form>


<form action="xiang.php" method="post"  >

姓名（英文写法）：<input type="text" name="username" />

版块（fid）：<input type="text" name="fid" />

展示版块对应人员：<select name="weizhi" />
<option value="neishen">内审</option>
<option value="caiwu">财务</option>
<option value="wangluo">网络</option>
<option value="jicai">集采</option>
<option value="index">信息</option>
<option value="jihua">计划</option>
<option value="liandong">部门联动</option>
<option value="quanti">全体联动</option>
</select>  
<input type="submit" name="submit" value="添加" />
</form>
</body>
</html>