<?php
   header("Content-type:text/html;charset=utf-8");
   $v1=$_REQUEST['name'];
   $v2=$_REQUEST['age'];
   $v3=$_REQUEST['wages'];
   $v4=$_REQUEST['date'];
   $v5=$_REQUEST['position'];
   $v6=$_REQUEST['bumen'];
   $link=mysql_connect("localhost","root","113024") or die('数据库连接失败'.mysql_error());
   $db=mysql_select_db("user_data",$link);
   $sql="INSERT INTO employee(ename,eage,ewages,ezhiwei,edate,ebumen) VALUES ('$v1','$v2','$v3','$v5','$v4','$v6')";
   mysql_query('SET NAMES UTF8');
   $result=mysql_query($sql,$link);
   echo '插入成功';
   ?>