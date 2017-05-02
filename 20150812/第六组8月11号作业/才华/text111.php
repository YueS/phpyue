<?php
   header("Content-type:text/html;charset=utf-8");
    $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
    $db=mysql_select_db("text_01",$link);
    $sql="select * from t_zhiwei";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
    $arr = array();
    while($row = mysql_fetch_array($result) ){
          $a1 = array("zhiwei"=>$row['zhiwei'],"id"=>$row['id']);
          array_push($arr,$a1);
    }
      echo json_encode($arr);
?>