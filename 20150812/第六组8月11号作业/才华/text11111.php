<?php
   header("Content-type:text/html;charset=utf-8");
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $wages=$_REQUEST['wages'];
    $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
    $db=mysql_select_db("text_01",$link);
    $sql="update t_employee set name='$name',wages=$wages where id=$id";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
?>