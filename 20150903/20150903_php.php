//<?php
//  $v1=$_GET["uname"];
//  $v2=$_GET["upwd"];
//  if($v1=='admin' && $v2=='123'){
//    echo "yes";
//  }else{
//    echo "no";
//  }
//
//?>

<?php
  $v1=$__GET["uname"];
  $v2=$__GET["upwd"];
  //连接数据库
  //连接服务器
  $link=mysql_connect("localhost","root","55555") or die ("数据库连接失败！".mysql_error());
  //连接数据库
  $db=mysql_select_db("test_33",$link) or de ("连接数据库失败".mysql_error());
  //执行sql
  mysql_query("insert into t_user(username,pwd) values($v1,$v2) ,$link");
  if(!empty($result)){
    echo"插入成功！";
  }else{
    echo"插入失败！";
  }

?>