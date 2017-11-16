<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
$temp=$_GET["q"];
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
mysql_query("SET NAMES 'gb2312'");
$sql="SELECT * FROM t_time where tname='".$temp."';";
$result = mysql_query($sql);
echo "<br/>教师日程信息：";
echo "<table border='1'>
<tr>
<th>教师姓名</th>
<th>月</th>
<th>日</th>
<th>节</th>
</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['month'] . "</td>";
 echo "<td>" . $row['day'] . "</td>";
  echo "<td>" . $row['section'] . "</td>";
 echo "</tr>";
 }
echo "</table>";

mysql_close($con);

?>
</body>
</html>
