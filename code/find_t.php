<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
$i=1;
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
mysql_query("SET NAMES 'gb2312'");
$sql="SELECT * FROM teacher_p;";
$result = mysql_query($sql);
echo "<br/>教师账号信息：";
echo "<table border='1' id='table2'>
<tr>
<th>用户名</th>
<th>密码</th>
<th>重置密码</th>
</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['user'] . "</td>";
 echo "<td>" . $row['password'] . "</td>";
 echo "<td>" . "<input name='b4' type='button' value='确认' onclick='User_reset1($i);'/>". "</td>";
 echo "</tr>";
 $i++;
 }
echo "</table>";

mysql_close($con);

?>
</body>
</html>
