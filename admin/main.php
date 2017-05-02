<?php 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>main</title>
<base target="_self">
<link rel="stylesheet" type="text/css" href="skin/css/base.css" />
<link rel="stylesheet" type="text/css" href="skin/css/main.css" />
</head>
<body leftmargin="8" topmargin='8'>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div style='float:left'> <img height="14" src="skin/images/frame/book1.gif" width="20" />&nbsp;欢迎使用。 </div>
      <div style='float:right;padding-right:8px;'>
        <!--  //保留接口  -->
      </div></td>
  </tr>
  <tr>
    <td height="1" background="skin/images/frame/sp_bg.gif" style='padding:0px'></td>
  </tr>
</table>
<table width="98%" align="center" border="0" cellpadding="3" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px;margin-top:8px;">
  <tr>
    <td background="skin/images/frame/wbg.gif" bgcolor="#EEF4EA" class='title'><span>消息</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>&nbsp;</td>
  </tr>
</table>
<table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
  <tr>
    <td colspan="2" background="skin/images/frame/wbg.gif" bgcolor="#EEF4EA" class='title'>
    	<div style='float:left'><span>快捷操作</span></div>
    	<div style='float:right;padding-right:10px;'></div>
   </td>
  </tr>
  
      </table></td>
  </tr>
</table>
<table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
  <tr bgcolor="#EEF4EA">
    <td colspan="2" background="skin/images/frame/wbg.gif" class='title'><span>系统基本信息</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="25%" align="right" bgcolor="#FFFFFF">您的级别：</td>
    <td width="75%" bgcolor="#FFFFFF">
	<?php 
	if(1)
	{
	echo "【超级管理员】";
	}else
	{
	echo "【超级管理员】";
	}
	?>
	</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">软件版本信息：</td>
    <td>PhpMyAdmin_2012_UTF8</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">您的IP地址：</td>
    <td> <?php echo $_SERVER['REMOTE_ADDR'];?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">服务器系统：</td>
    <td><?php echo PHP_OS;?> </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">脚本解释引擎：</td>
    <td>PHP<?php echo PHP_VERSION;?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">站点物理路径：</td>
    <td><?php echo $_SERVER['DOCUMENT_ROOT'];?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">数据库使用：</td>
    <td><img src="skin/images/frame/g.gif" width="12" height="12" />MY SQL </td>
  </tr>
</table>

</body>
</html>