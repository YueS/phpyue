<?php 

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理平台</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	overflow:hidden;
}
.STYLE3 {color: #528311; font-size: 12px; }
.STYLE4 {
	color: #42870a;
	font-size: 12px;
}
-->
</style>
<script src="skin/js/ad_chk.js"></script>
</head>

<body onLoad="return focus_d()">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#e5f6cf">&nbsp;</td>
  </tr>
  <tr>
    <td height="608" background="skin/images/frame/login_03.gif"><table width="862" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="239" background="skin/images/frame/login_04.gif" >&nbsp;</td>
      </tr>
      <tr>
        <td height="95"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="424" height="122" background="skin/images/frame/login_06.gif">&nbsp;</td>
            <td width="183" background="skin/images/frame/login_07.gif">
			
			<form name="login" method="post" action="login.php" onSubmit="return CheckAdminLogin()">
              <table width="100%" border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td width="21%"><span class="STYLE3">用　户</span></td>
                  <td colspan="2"><input name="ad_name" type="text" id="ad_name"  style="height:18px; width:100px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"></td>
                </tr>
                <tr>
                  <td height="15"><span class="STYLE3">密　码</span></td>
                  <td colspan="2"><input name="ad_pwd" type="password" id="ad_pwd"  style="height:18px; width:100px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"></td>
                </tr>
                <tr>
                  <td height="15" class="STYLE3">验证码</td>
                  <td width="33%"><input name="yzm" type="text" id="yzm"  style="height:18px; width:50px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;">				 </td>
                  <td width="46%"> <!--2 将验证码导入文件中-->
				<img src="../include/yzm.php" alt="看不清?请点击" onClick="this.src=this.src+'?num='+Math.random()">	</td>
                </tr>
                <tr>
                  <td colspan="3" align="center">
				  <!--1 加入隐藏域-->
				  <input name="submit" type="submit" id="submit" value="登录">
				  <input type="reset" name="Submit2" value="重置">
                
                  </td>
                </tr>
              </table>
                  </form>
            </td>
            <td width="255" height="122" valign="middle" background="skin/images/frame/login_08.gif">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="247" valign="top" background="skin/images/frame/login_09.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22%" height="30">&nbsp;</td>
            <td width="56%">&nbsp;</td>
            <td width="22%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="44%" height="20">&nbsp;</td>
                <td width="56%" class="STYLE4">版本 2014V1.0 </td>
              </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#a2d962">&nbsp;</td>
  </tr>
</table>

</body>
</html>
