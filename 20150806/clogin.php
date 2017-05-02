<?php
   header("Content-type:text/html;charset=utf-8");
//  echo 'hello world!';
   $v1=$_GET['username'];
   $v2=$_GET['pwd'];
//   echo "用户名：$v1  密码：$v2<br>";

//   链接数据库
//    链接服务器
//    $link=mysql_connect("localhost","root","root") or die("数据链接失败".mysql_error);
////    if($link)
////        echo 'link start<br>';
//    //链接数据库
//    $db=mysql_select_db("text_01",$link);
////    if($db)
////        echo "link db start<br>";
////    else
////        echo "link db error<br>";
//    //执行sql
//    echo "select * from t_user where username='$v1' and pwd='$v2'<br>";
//    $sql = "select * from t_user where username='$v1' and pwd='$v2'";
//    $result = mysql_query($sql,$link);
////     将结果集转化位数组
//    echo $result;
//    $arr = mysql_fetch_row($result);
//    if(!empty($arr)){
//        echo "成功";
//    }else{
//        echo "失败";
//    }
    $link=mysql_connect("localhost","root","55555") or die("数据库连接失败".mysql_error());
      if($link){
          echo '数据库服务器连接成功';
       }
       //连接数据库
       //$db=mysql_select_db("20150806",$link);
       $db=mysql_select_db("20150806",$link);
       if($db){
         echo '数据库连接成功';
       }else{
          echo '数据库连接失败';
       }
       //执行sql
       $sql="select * from login where username='$v1' and password='$v2'";
//       echo $sql;
       $result=mysql_query($sql,$link);
       echo $result;
       //$arr_result= mysql_fetch_row($result);
       $arr_result=mysql_fetch_row($result);

      if(!empty($arr_result)){
       echo '存在数据，登陆成功';
      } else{
      echo '用户名密码错误，登陆失败';
      }

?>