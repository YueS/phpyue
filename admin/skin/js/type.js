// JavaScript Document
function type_add()
{
  if(document.form1.class_type.value=="无")
  {
  alert ("请选择栏目类型");
  document.form1.class_type.focus();
  return false;
  }
  if(document.form1.class_type.value==1 && document.form1.class_tree.value!=-1)
  {
  alert ("请选择为一级栏目");
  document.form1.class_tree.focus();
  return false;
  }
 if(document.form1.class_name.value=='')
 {
	 alert('栏目名称不可以为空!');
	 document.form1.class_name.focus();
	 return false;
 }
  return true;
}
