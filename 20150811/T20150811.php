<?php
   header("Content-type:text/html;charset=utf-8");

   $link=mysql_connect("localhost","root","55555") or die("���ݿ�����ʧ��".mysql_error());
   $db=mysql_select_db("20150806",$link);
   $sql="select * from login";
   $result=mysql_query($sql,$link);

   //�ӽ�����л�ȡ����
//  [{username:'zs',pwd:'123'},{username:'ls',pwd:'456'}]

   $jsonobj;
   $arr=array();
   while($arrresult=mysql_fetch_array($result)){
//     echo $arrresult['username'];
//     echo $arrresult['pwd'];
      $a1= array("username"=>$arrresult['username'],"password"=>$arrresult['password']);
      //json_encode �Ա�������json��ʽ����
//      $jsonobj=json_encode($a1);
//      print_r($a1);
//      echo $jsonobj;
      //�����������Ԫ��
        array_push($arr,$a1);
   }
   echo json_encode($arr);


    //php���� --����ֵ�����ƣ�ֵ��
//    $arr1=array();
//    $arr1['a']='123';
//    $arr1['b']='456';
//    $arr1['c']='789';
//    echo $arr1['b']."sssss<br><br><br>";

//    $arr1=array("a"=>'123','b'=>'456','c'=>'789');
//    echo $arr1['b']."sssss<br><br><br>";
   ?>



<?php
//<html>
//<body>
//
//<?php
//   header("Content-type:text/html;charset=utf-8");
//
//   $link=mysql_connect("localhost","root","root") or die("���ݿ�����ʧ��".mysql_error());
//   $db=mysql_select_db("test_33",$link);
//   $sql="select * from t_user";
//   $result=mysql_query($sql,$link);
//
//   //�ӽ�����л�ȡ����
//
//   while($arrresult=mysql_fetch_array($result)){
//   ?>
//
//   <div style="color:red;font-size:30px">
//       <?php   echo $arrresult['username'];    ?>
//   </div>
//
//   <?php
//     }
//   ?>
//
//</body>
//</html>
//
//
?>
