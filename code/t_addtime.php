<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
$n=$_GET["t"];
$m=$_GET["m"];
$d=$_GET["d"];
$s=$_GET["s"];
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
mysql_query("SET NAMES 'gb2312'");
$sql="insert into t_time (tname,month,day,section) values ('".$n."' ,'".$m."' ,'".$d."' ,'".$s."');";
echo $sql;
mysql_query($sql);
mysql_close($con);
?>
</body>
</html>
