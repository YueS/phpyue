<?php
   header("Content-type:text/html;charset=utf-8");

    $uname=$_REQUEST['uname'];
    $uage=$_REQUEST['uage'];
    $wages=$_REQUEST['wages'];
    $date=$_REQUEST['date'];
    $zw=$_REQUEST['zw'];
    $s1=$_REQUEST['s1'];
    $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
    $db=mysql_select_db("text_01",$link);
    $sql="insert t_employee(name,age,wages,zhiwei,data,bumen) value ('$uname',$uage,$wages,'$zw','$date',$s1)";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
    echo 'true!';
?>