//����� 10:57:27 (���˷���)
<html>
<body>

<?php
   header("Content-type:text/html;charset=utf-8");

   $link=mysql_connect("localhost","root","root") or die("���ݿ�����ʧ��".mysql_error());
   $db=mysql_select_db("test_33",$link);
   $sql="select * from t_user";
   $result=mysql_query($sql,$link);

   //�ӽ�����л�ȡ����

   while($arrresult=mysql_fetch_array($result)){
   ?>

   <div style="color:red;font-size:30px">
       <?php   echo $arrresult['username'];    ?>
   </div>

   <?php
     }
   ?>

</body>
</html>



