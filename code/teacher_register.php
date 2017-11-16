<?php
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
$temp=$_GET["q"];
$temp1=$_GET["p"];
//$sql = "SELECT password FROM teacher_p WHERE user='".$temp."';";
mysql_query("SET NAMES 'gb2312'");
$sql ="INSERT INTO teacher_p (user,password) VALUES ('".$temp."', '".$temp1."');";
echo $sql;
mysql_query($sql);
?>