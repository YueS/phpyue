<?php
header("Content-type:text/html;charset=utf-8");
$link=mysql_connect("localhost","root","55555")or die("���ݿ�����ʧ��".mysql_error());
$db=mysql_select_db("20150806",$link);
$sql="select*from login where username='$v1' and password='$v2'";
$result=mysql_query($sql,$link);


//$arr1=array("a"=>'123,'b'=>'456','c'=>'789');

$jsonobj;
$arr=array();
while($arresult=mysql_fetch_array($result)){
//echo $arrresult['username]};
//echo $arrresult['pwd];
$a1=array("username"=>$arrresult['username'],"pwd"=>arrresult['pwd']);
//json_encode�Ա�������json��ʽ����
$jsonobj=json_encode($a1);
//print_r($a1);
//echo $jsonobj;
//�����������Ԫ��
array_push($arr,$jsonobj);

}
//echo $arr;
//print_r($a1);
echo json_encode($arr);