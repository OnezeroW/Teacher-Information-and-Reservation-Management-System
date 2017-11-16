<?php
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
$tname=$_GET["q"];
$sname=$_GET["p"];
$month=$_GET["m"];
$section=$_GET["s"];
$day=$_GET["d"];
$message=$_GET["message"];
mysql_query("SET NAMES 'gb2312'");
$sql2="select * from teacher_p where user='".$tname."';";
$result1=mysql_query($sql2);
if(mysql_num_rows($result1)<1)
{
echo 0;
die();
}
mysql_query("SET NAMES 'gb2312'");
$sql ="select max(id) from appointment;";
 $result=mysql_query($sql,$con);
$row = mysql_fetch_row($result);
$id=$row[0]+1;
$time=date("Y-m-d h:m:s");
mysql_query("SET NAMES 'gb2312'");
$sql1 ="INSERT INTO appointment (id,tname,sname,month,day,section,sdate,smessage) VALUES ('".$id."','".$tname."', '".$sname."','".$month."','".$day."','".$section."','".$time."','".$message."');";
mysql_query($sql1);
echo 1;
mysql_close();
?>