// JavaScript Document
//选择所有
function checkAll(obj,id)  //调用实例onclick="checkAll(this,gid[])"
 {  
    var check = document.getElementsByName(id);  
    for(i=0; i<check.length; i++)  
    {  
        check[i].checked = obj.checked;  
    }  
 }
 //选择所有
function checkall(selected)//调用实例onclick="checkall(this.checked)"或onclick="checkall(true)"
{
	var obj = document.form1;
	for(var i = 0; i < obj.elements.length; i++){
		var s = obj.elements[i]; 
		if((s.id).indexOf('gid') != -1){
			s.checked = selected;
		}
	}
}
 
//多选删除onclick触发验证事件 
 function diy_confirm(notetype){
	var obj = document.form1;
	for(var i = 0; i < obj.elements.length; i++){
		var s = obj.elements[i]; 
		if((s.id).indexOf('gid') != -1){
			if(s.checked == true){
				var ischecked = 'true';
			}
		}
	}
	if(ischecked == 'true'){
		if(notetype == 0){
			note = '确定要删除选中的信息吗？';
		}
		if(notetype == 1){
			note = '删除此栏目,并将其子类及信息删除,确定删除?';
		}
		if(confirm(note)) return true;
		else return false;
	}
	else{
		alert('请确认选择项！');
		return false;
	}
}

//删除所有href="javascript:mgr_delall('class_save2.php');"
		function mgr_delall(submiturl){
			document.form1.action = submiturl+'?action=delall';
			document.form1.submit();
		}

<!-- 
//限制只能输入数字 
function checkNum() 
{ //alert(event.keyCode); 
if((event.keyCode>=48&&event.keyCode<=57)||event.keyCode==8||(event.keyCode>=96&&event.keyCode<=105) 
||event.keyCode==46||event.keyCode==37||event.keyCode==39||event.keyCode==190) 
//||event.keyCode==110)//加上这个就可以输入小数点了. 
{ 
event.returnValue=true; 
} 
else 
{ 
event.returnValue=false; 
} 
}

// -->