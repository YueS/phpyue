<?php
   header("Content-type:text/html;charset=utf-8");
    $v1=$_REQUEST['value'];
    $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
    $db=mysql_select_db("text_01",$link);
    $sql="select s from t_s where t_s.id=$v1";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
    $arr = array();
    while($row = mysql_fetch_array($result) ){
          $a1 = array("s"=>$row['s']);
          array_push($arr,$a1);
    }
      echo json_encode($arr);
?>