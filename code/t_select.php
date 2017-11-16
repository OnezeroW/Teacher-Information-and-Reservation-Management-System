<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<script src="teacher.js"></script>
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
$sql="SELECT * FROM appointment where tname='".$temp."' and agree=0;";
$result = mysql_query($sql);
$sql_1="SELECT * FROM appointment where tname='".$temp."' and agree=1;";
$result_1 = mysql_query($sql_1);
/*$sql="SELECT * FROM appointment where tname='".$temp."';";
$result = mysql_query($sql);*/
echo "<br/>待处理预约：";
echo "<table id='table1' border='2'>
<tr>
<th>ID</th>
<th>教师姓名</th>
<th>学生姓名</th>
<th>月</th>
<th>日</th>
<th>节</th>
<th>同意？</th>
<th>学生来信</th>
<th>显示</th>	
</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['sname'] . "</td>";
 echo "<td>" . $row['month'] . "</td>";
  echo "<td>" . $row['day'] . "</td>";
 echo "<td>" . $row['section'] . "</td>";
 echo   "<td>" ."<form id='appointment' name='appointment' >   
 <input name='b4' type='button' value='确认' onclick='User($i);'/>
 </form > " . "</td>";
     echo   "<td >" ."<input name='b5' type='button' value='查看' onclick='User2($i);'/>" . "</td>";
  echo "<td style='display:none;'>" . $row['smessage'] . "</td>";
 echo "</tr>";
 $i++;
 }
echo "</table>";

echo "<br/>";
echo "<br/>已确认预约：";
echo "<table id='table0' border='2'>
<tr>
<th>ID</th>
<th>教师姓名</th>
<th>学生姓名</th>
<th>月</th>
<th>日</th>
<th>节</th>
<th>学生来信</th>
<th>显示</th>
</tr>";
while($row = mysql_fetch_array($result_1))
 {
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['sname'] . "</td>";
 echo "<td>" . $row['month'] . "</td>";
 echo "<td>" . $row['day'] . "</td>";
 echo "<td>" . $row['section'] . "</td>";
 echo   "<td >" ."<input name='b6' type='button' value='查看' onclick='User3($j);'/>" . "</td>";
 echo "<td style='display:none;'>" . $row['smessage'] . "</td>";
 echo "</tr>";
 $j++;
 }
echo "</table>";
mysql_close($con);
?>
</body>
</html>
