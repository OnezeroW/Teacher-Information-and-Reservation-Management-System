<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
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
echo "<br/>��ȷ��ԤԼ��";
echo "<table id='table3' border='2'>
<tr>
<th>ID</th>
<th>��ʦ����</th>
<th>ȷ��ԤԼʱ��</th>
<th>��</th>
<th>��</th>
<th>��</th>
<th>��ʦ����</th>
<th>��ʾ</th>
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
 echo "<td >" ."<input name='b5' type='button' value='�鿴' onclick='User1($i);'/>" . "</td>";
 echo "<td style='display:none;'>" . $row['tmessage'] . "</td>";
 echo "</tr>";
 $i++;
 }
echo "</table>";

echo "<br/>";
echo "<br/>δ�ظ�ԤԼ��";
echo "<table id='table0' border='2'>
<tr>
<th>ID</th>
<th>��ʦ����</th>
<th>�ύԤԼʱ��</th>
<th>��</th>
<th>��</th>
<th>��</th>
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
