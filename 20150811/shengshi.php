//于瑞彬 16:38:41 (多人发送)
//<!DOCTYPE html>
//<html lang="en">
//<head>
//    <meta charset="UTF-8">
//    <title></title>
//    <style>
//        #d1 span{
//            padding: 6px 8px;
//        }
//    </style>
//</head>
//<body>
//<select id="s1" onchange="fun()"></select>
//<div id="d1"></div>
//</body>
//</html>
//<script>
//    var s1 = document.getElementById('s1');
//    var a = getdata("text10.php",null);
//    a = eval(a);
//
//	for(var i=0;i< a.length;i++){
//        var t = "<option value='"+a[i].id+"'>"+a[i].pro+"</option>";
//        s1.innerHTML+=t;
//    }
//
//
//
//
//    function fun(){
//        document.getElementById('d1').innerHTML="";
//        var c = s1.value;
//        var k = getdata("text101.php?city="+c,null);
//        k = eval(k);
//        for(var i=0;i< k.length;i++){
//            var t = "<span>"+k[i].s+"</span>";
//            document.getElementById('d1').innerHTML+=t;
//        }
//    }
//    function createXHR(){
//        var XHRequest;
//        if(window.XMLHttpRequest){
//            XHRequest = new XMLHttpRequest;
//        }else if(window.ActiveXObject){
//            try{
//                XHRequest = new ActiveXObject("Msxml2.XMLHTTP");
//            }
//            catch(e){
//                XHRequest = new ActiveXObject("Microsoft.XMLHTTP");
//            }
//        }
//        return XHRequest;
//    }
//    function getdata(url,arg){
//        var XHRequest=createXHR();
//        XHRequest.open("GET",url,false);
//        var v_str;
//        XHRequest.onreadystatechange=function(){
//            if(XHRequest.readyState==4 && XHRequest.status==200){
//                v_str = XHRequest.responseText;
//            }
//        };
//        XHRequest.send();
//        return v_str;
//    }
//
//</script>
//于瑞彬 16:38:54 (多人发送)
<?php
   header("Content-type:text/html;charset=utf-8");
    $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
    $db=mysql_select_db("text_01",$link);
    $sql="select * from t_pro";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
    $arr = array();
    while($row = mysql_fetch_array($result) ){
          $a1 = array("city"=>$row['city'],"id"=>$row['id']);
          array_push($arr,$a1);
    }
      echo json_encode($arr);
?>






<?php
   header("Content-type:text/html;charset=utf-8");
    $v1=$_REQUEST['city'];
    $link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
    $db=mysql_select_db("text_01",$link);
    $sql="select * from t_pro,t_city
	     where t_city.pro_id=t_pro.id
		 and t_city.pro_id=$v1";
    mysql_query('SET NAMES UTF8');
    $result=mysql_query($sql,$link);
    $arr = array();
    while($row = mysql_fetch_array($result) ){
          $a1 = array("s"=>$row['s']);
          array_push($arr,$a1);
    }
      echo json_encode($arr);
?>
