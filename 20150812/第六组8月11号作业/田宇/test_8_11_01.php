<?php
   header("Content-type:text/html;charset=utf-8");
    $link=mysql_connect("localhost","root","113024") or die('数据库连接失败'.mysql_error());
    $db=mysql_select_db("user_data",$link);
    $sql="SELECT * FROM bumen";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
    $arr=array();
    while(  $arr_result=mysql_fetch_array($result)){
    $a1=array("bname"=>$arr_result['bname'],"bid"=>$arr_result['bid']);
    array_push($arr,$a1);
   };
   echo json_encode($arr);
   ?>