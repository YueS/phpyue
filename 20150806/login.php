<?php
    header("Content-type:text/html;charset=utf-8");
//    echo 'hello word!';
    $v1=$_GET['username'];
    $v2=$_GET['pwd'];
    echo"用户名：$v1 密码：$v2";
    //连接数据库
    //连接数据库服务器
    //$link=mysql_connect("localhost","root","55555");
    //if($link){
    //    echo'数据库连接成功';
    //}else{
    //    echo'数据库连接失败';
    //}
    
    $link=mysql_connect("localhost","root","55555") or die ("数据库连接失败".mysql_error());
    if($link){
        echo'数据库服务器连接成功';
    }
    //连接数据库
    $db=mysql_select_db("20150806",$link);
    if($db){
        echo'数据库连接成功';
    }else{
        echo'数据库连接失败';
    }
    //执行sql
    $sql="select*from login where username='$v1' and password='$v2'";
    $result=mysql_query($sql,$link);
    //echo $result;
    //将结果集转换为数组
     $arr_result=mysql_fetch_row($result);
    if(!empty($arr_result)){
        echo'存在数据，登录成功';
    }else{
        echo'用户名密码错误，登录失败';
    }





?>    