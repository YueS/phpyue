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
    <td><div style='float:left'> <img height="14" src="skin/images/frame/book1.gif" width="20" />&nbsp;��ӭʹ�á� </div>
      <div style='float:right;padding-right:8px;'>
        <!--  //�����ӿ�  -->
      </div></td>
  </tr>
  <tr>
    <td height="1" background="skin/images/frame/sp_bg.gif" style='padding:0px'></td>
  </tr>
</table>
<table width="98%" align="center" border="0" cellpadding="3" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px;margin-top:8px;">
  <tr>
    <td background="skin/images/frame/wbg.gif" bgcolor="#EEF4EA" class='title'><span>��Ϣ</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>&nbsp;</td>
  </tr>
</table>
<table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
  <tr>
    <td colspan="2" background="skin/images/frame/wbg.gif" bgcolor="#EEF4EA" class='title'>
    	<div style='float:left'><span>��ݲ���</span></div>
    	<div style='float:right;padding-right:10px;'></div>
   </td>
  </tr>
  
      </table></td>
  </tr>
</table>
<table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
  <tr bgcolor="#EEF4EA">
    <td colspan="2" background="skin/images/frame/wbg.gif" class='title'><span>ϵͳ������Ϣ</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="25%" align="right" bgcolor="#FFFFFF">���ļ���</td>
    <td width="75%" bgcolor="#FFFFFF">
	<?php 
	if(1)
	{
	echo "����������Ա��";
	}else
	{
	echo "����������Ա��";
	}
	?>
	</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">����汾��Ϣ��</td>
    <td>PhpMyAdmin_2012_UTF8</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">����IP��ַ��</td>
    <td> <?php echo $_SERVER['REMOTE_ADDR'];?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">������ϵͳ��</td>
    <td><?php echo PHP_OS;?> </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">�ű��������棺</td>
    <td>PHP<?php echo PHP_VERSION;?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">վ������·����</td>
    <td><?php echo $_SERVER['DOCUMENT_ROOT'];?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="right">���ݿ�ʹ�ã�</td>
    <td><img src="skin/images/frame/g.gif" width="12" height="12" />MY SQL </td>
  </tr>
</table>

</body>
</html>