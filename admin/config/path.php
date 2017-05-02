<?php 
session_start();
$_SESSION["car"][]="";
//设置时区
date_default_timezone_set("PRC");
//编码字符集
header("Content-type:text/html;charset=utf-8"); 
//数据库链接
$db_host="localhost";
$db_user="root";
$db_pwd="123";
$db_name="baofeng";
$db_charest="utf8";
$conn=mysql_connect($db_host,$db_user,$db_pwd) or die("无法链接数据库".mysql_error());
mysql_select_db($db_name,$conn)or die("无法链接数据库".mysql_error());
mysql_query("set names '$db_charest'");
//常量
define("ICP","0000000000");
?>