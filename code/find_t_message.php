<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
$i=1;
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
$sql="SELECT * FROM t_message;";
mysql_query("SET NAMES 'gb2312'");
$result = mysql_query($sql);
echo "<br/>��ʦ������Ϣ��";
echo "<table border='1' id='table3'>
<tr>
<th>��ʦ����</th>
<th>ְ��</th>
<th>�о�����</th>
<th>��ϸ��Ϣ</th>
<th>��ʾ</th>
</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['title'] . "</td>";
 echo "<td>" . $row['object'] . "</td>";
 echo   "<td >" ."<input name='b4' type='button' value='�鿴' onclick='modify_detail($i);'/>" . "</td>";
 echo "<td style='display:none;'>" . $row['detail'] . "</td>";
 echo "</tr>";
 $i++;
 }
echo "</table>";

mysql_close($con);

?>
</body>
</html>
