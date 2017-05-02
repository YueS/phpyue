<?php
   header("Content-type:text/html;charset=utf-8");
    $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
    $db=mysql_select_db("text_01",$link);
    $sql="select t_employee.id,name,wages,t_zhiwei.zhiwei,bz from t_employee,t_zhiwei where t_zhiwei.zhiwei_emp=t_employee.bumen";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
    $arr = array();
    while($row = mysql_fetch_array($result) ){
          $a1 = array("id"=>$row['id'],"name"=>$row['name'],"wages"=>$row['wages'],"zhiwei"=>$row['zhiwei'],"bz"=>$row['bz']);
          array_push($arr,$a1);
    }
      echo json_encode($arr);
?>
