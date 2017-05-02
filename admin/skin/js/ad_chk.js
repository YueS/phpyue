function voidNum(argValue)
{
var flag1=false;
var compStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
var length2=argValue.length;
   for (var iIndex=0; iIndex<length2; iIndex++)
   {
   var temp1=compStr.indexOf(argValue.charAt(iIndex));
    if (temp1== -1)
	{
	flag1=false;
	break;
	}else
	{
	flag1=true;
	}
   }
   return flag1;
}
function CheckAdminLogin()
{
  if (document.login.ad_name.value=="")
  {
  alert ("请填写管理员名称");
  document.login.ad_name.focus();
  return false;
  }
  if (!voidNum(document.login.ad_pwd.value))
  {
  alert ("请填写管理员密码");
  document.login.ad_pwd.focus();
  return false;
  }
  if (!voidNum(document.login.yzm.value))
  {
  alert ("请输入正确的验证码");
  document.login.yzm.focus();
  return false;
   }
  return true;
}

function focus_d()
{
	 document.login.ad_name.focus();
}