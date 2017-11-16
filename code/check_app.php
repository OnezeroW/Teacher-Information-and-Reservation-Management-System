<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
$i=1;
$j=1;
$temp=$_GET["q"];
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
mysql_query("SET NAMES 'gb2312'");
$sql="select * from appointment where agree=1 and sname='".$temp."'";
$result = mysql_query($sql);
$sql_1="select * from appointment where agree=0 and sname='".$temp."'";
$result_1 = mysql_query($sql_1);
echo "<br/>已确认预约：";
echo "<table id='table3' border='2'>
<tr>
<th>ID</th>
<th>教师姓名</th>
<th>确认预约时间</th>
<th>月</th>
<th>日</th>
<th>节</th>
<th>教师来信</th>
<th>显示</th>
</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $i . "</td>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['ttime'] . "</td>";
 echo "<td>" . $row['month'] . "</td>";
 echo "<td>" . $row['day'] . "</td>";
 echo "<td>" . $row['section'] . "</td>";
 echo "<td >" ."<input name='b5' type='button' value='查看' onclick='User1($i);'/>" . "</td>";
 echo "<td style='display:none;'>" . $row['tmessage'] . "</td>";
 echo "</tr>";
 $i++;
 }
echo "</table>";

echo "<br/>";
echo "<br/>未回复预约：";
echo "<table id='table0' border='2'>
<tr>
<th>ID</th>
<th>教师姓名</th>
<th>提交预约时间</th>
<th>月</th>
<th>日</th>
<th>节</th>
</tr>";
while($row = mysql_fetch_array($result_1))
 {
 echo "<tr>";
 echo "<td>" . $j . "</td>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['sdate'] . "</td>";
 echo "<td>" . $row['month'] . "</td>";
 echo "<td>" . $row['day'] . "</td>";
 echo "<td>" . $row['section'] . "</td>";
 echo "</tr>";
 $j++;
 }
echo "</table>";
//mysql_query($sql);
?>
</body>
</html>
