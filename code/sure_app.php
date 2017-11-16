<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
$temp=$_GET["q"];
$m=$_GET["message"];
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
$time=date("Y-m-d h:m:s");
mysql_query("SET NAMES 'gb2312'");
$sql="update  appointment set agree=1 where id='".$temp."';";
$sql1 ="update  appointment set ttime='".$time."' where id='".$temp."';";
$sql2="update appointment set tmessage='".$m."' where id='".$temp."';";
mysql_query($sql);
mysql_query($sql1);
mysql_query($sql2);
?>
</body>
</html>
