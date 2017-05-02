<?php 

?>
<html>
<head>
<title>menu</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<link rel="stylesheet" href="skin/css/menu.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language='javascript'>var curopenItem = '1';</script>
<script language="javascript" type="text/javascript" src="skin/js/frame/menu.js"></script>
<script type="text/javascript" src="skin/js/jquery-1.6.js"></script>
<script>
$(document).ready(function()
{
	$("#del_dir").click(function(){
	$.post("ajax.php", {id:"1"},function(data){
    alert(data);
      }); 
	});
})
</script>
<base target="main" />
</head>
<body target="main">
<table width='99%' height="100%" border='0' cellspacing='0' cellpadding='0' >
  <tr>
    <td style='padding-left:3px;padding-top:8px' valign="top">
	<!-- Item 1 Strat -->
      <dl class='bitem'>
        <dt onClick='showHide("items1_1")' style="display:block;"><b>管理员设置</b></dt>
        <dd style='display:none' class='sitem' id='items1_1'>
          <ul class='sitemu'>
            <li>
              <div class='items'>
                <div class='fllct'><a href='ad_add.php' target='main'>添加管理员</a></div>
                
              </div>
            </li>
            <li><a href='ad_list.php' target='main'>管理员列表</a> </li>
			<li><a href='ad_edit.php' target='main'>修改　密码</a> </li>
          </ul>
        </dd>
		
		<dt onClick='showHide("items1_2")'><b>常用操作</b></dt>
        <dd style='display:block' class='sitem' id='items1_2'>
          <ul class='sitemu'>
                      
		 
             <li >
		  		<div class='items'>
                <div class='fllct'><a href='xiang.php' target='main'>功能</a></div>
           		</div>
		    </li>
            
            
             <li >
		  		<div class='items'>
                <div class='fllct'><a href='news.php' target='main'>新闻列表</a></div>
           		</div>
		    </li>
            
            <li >
		  		<div class='items'>
                <div class='fllct'><a href='add_news.php' target='main'>添加新闻</a></div>
           		</div>
		    </li>
           
          </ul>
        </dd>
		
		
		
      </dl>
      <!-- Item 1 End -->
      <!-- Item 2 Strat -->
      <!--<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>系统帮助</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='http://www.865171.cn' target='_blank'>官方网站</a></li>
            <li><a href='http://www.865171.cn/admin-templates/' target='_blank'>更多后台模板</a></li>
			 <li>
              <div class='items'>
                <div class='fllct'><a href='archives.php' target='main'>网站栏目管理</a></div>
                <div class='flrct'> <a href='archives.php' target='main'><img src='skin/images/frame/gtk-sadd.png' alt='创建栏目' title='创建栏目'/></a> </div>
              </div>
            </li>
            <li><a href='archives.php' target='main'>所有档案列表</a> </li>
            <li>
              <div class='items'>
                <div class='fllct'><a href='archives.php' target='main'>内容回收站</a></div>
                <div class='flrct'> <a href='archives.php' target='main'><img src='skin/images/frame/gtk-del.png' alt='清空回收站' title='清空回收站'/></a> </div>
              </div>
            </li>
          	           <li>
              <div class='items'>
                <div class='fllct'><a href='type.php' target='main'>网站栏目管理</a></div>
                <div class='flrct'> <a href='type_add.php' target='main'><img src='skin/images/frame/gtk-sadd.png' alt='创建栏目' title='创建栏目'/></a> </div>
              </div>
            </li>
			 <li>
              <div class='items'>
                <div class='fllct'><a href='about.php' target='main'>关于我们</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='contact.php' target='main'>联系我们</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='recruitment.php' target='main'>招贤纳士</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='construction.php' target='main'>网站建设</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='marketing.php' target='main'>网络营销</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='ba.php' target='main'>电子商务</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='sem.php' target='main'>SEM营销</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='seo_list.php' target='main'>网站优化</a></div>
				<div class='flrct'> <a href='seo.php' target='main'><img src='skin/images/frame/gtk-sadd.png' alt='添加文章' title='添加文章'/></a> </div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='package.php' target='main'>网站套餐</a></div>
              </div>
            </li>
			<li>
              <div class='items'>
                <div class='fllct'><a href='js.php' target='main'>幻灯管理</a></div>
              </div>
            </li>
		  </ul>
        </dd>
      </dl>-->
      <!-- Item 2 End -->
	  </td>
  </tr>
</table>
</body>
</html>