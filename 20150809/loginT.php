//<!--孙启越 14:41:28-->
//<!--老师刚发的，发我给下-->
//<!--孙启越 14:41:31-->
//<!--没收到-->
//<!--才华 14:42:00-->
<?php
   header("Content-type:text/html;charset=utf-8");
//  echo 'hello world!';
//   $v1=$_GET['uname'];
//   $v2=$_GET['pwd'];
//   $v1=$_POST['uname'];
//   $v2=$_POST['pwd'];
   //不用区分post与get方式
   $v1=$_REQUEST['uname'];
   $v2=$_REQUEST['pwd'];

  //echo "用户名：$v1  密码：$v2";
  //连接数据库

   //连接数据库服务器
   //mysql_connect(服务器名,用户名,密码);
//   $link=mysql_connect("localhost","root","root");
//   if($link){
//      echo '数据库连接成功';
//   }else{
//      echo '数据库连接失败';
//   }
   $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());

//  if($link){
//      echo '数据库服务器连接成功';
//   }
   //连接数据库
   $db=mysql_select_db("test_33",$link);
//   if($db){
//     echo '数据库连接成功';
//   }else{
//      echo '数据库连接失败';
//   }
   //执行sql
   $sql="select * from t_user where username='$v1' and pwd='$v2'";
   $result=mysql_query($sql,$link);
   $arr_result= mysql_fetch_row($result);

  if(!empty($arr_result)){
   echo "登陆成功";
  } else{
   echo '用户名密码错误，登陆失败';
  }






//     $info = array('no1'=>'bsd', 'no2'=>'wuddy', 'no3'=>'xie');
//      $userinfo = json_encode($info);
//      echo $userinfo;
//
//
//var ret = ajax.responseText;
//            var show_info = eval(ret);
//            show_check.innerHTML = show_info[0].no1; // bsd
//            show_flag.innerHTML = show_info[0].no2; // wuddy
//alert("responseXML's value: " + info[0].firstChild.data);

/* 这边如果写成     $info = array('no1'=>'bsd', 'no2'=>'wuddy', 'no3'=>'xie'); */
/* 同样要把html文件中必成     var show_info = eval('[' + ret + ']'); 都是返回一个对象 */
//   do{
//      echo $arr_result['username'];
//                }while(mysql_fetch_array($result));






?>
