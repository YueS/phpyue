<?php
    header("Content-type:text/html;charset=utf-8");
    //echo "hello world!"
    $v1=$_GET['uname'];
    $v2=$_GET['pwd'];
   echo "用户名：$v1 密码：$v2";
   //链接服务器
   $link=mysql_connect("localhost","root","113024") or die("数据连接失败".mysql_error());
   if($link){
      echo '数据库服务器连接成功';
     }
     //链接数据库
     $db=mysql_select_db("user_data", $link);
     if($db){
     echo '数据库连接成功';
     }else{
     echo '数据库连接失败';
     }
    //执行sql
      $sql="select * from t_user where username='$v1'and pwd='$v2'";
      $result=mysql_query($sql,$link);
      $arr_result= mysql_fetch_row($result);
       if(!empty($arr_result)){
        echo '存在数据，登陆成功';
       } else{
       echo '用户名密码错误，登陆失败';
       }

?> 