<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
$i=1;
$temp=$_GET["q"];
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
$object=$_GET["k"];
$month=$_GET["m"];
$db=$_GET["db"];
$de=$_GET["de"];
$section=$_GET["s"];
if($section)
{
mysql_query("SET NAMES 'gb2312'");
$sql="select distinct t_message.tname,t_message.title,t_message.object,t_message.detail from t_message,t_time where t_message.tname=t_time.tname and object='".$object."' and t_time.month='".$month."' and 
        t_time.day>='".$db."' and t_time.day<='".$de."' and t_time.section='".$section."'";
}
else
{
mysql_query("SET NAMES 'gb2312'");
$sql="select distinct t_message.tname,t_message.title,t_message.object,t_message.detail from t_message,t_time where t_message.tname=t_time.tname and object='".$object."' and t_time.month='".$month."' and 
        t_time.day>='".$db."' and t_time.day<='".$de."';";
}
$result = mysql_query($sql);
echo "<br/><预约>教师科研信息：";
echo "<table border='1'  id='table4'>
<tr>
<th>教师姓名</th>
<th>职称</th>
<th>研究方向</th>
<th>详细信息</th>
<th>显示</th>
</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['title'] . "</td>";
 echo "<td>" . $row['object'] . "</td>";
    echo   "<td >" ."<input name='b4' type='button' value='查看' onclick='User2($i);'/>" . "</td>";
  echo "<td style='display:none;'>" . $row['detail'] . "</td>";
 echo "</tr>";
  $i++;
 }
echo "</table>";

mysql_close($con);

?>
</body>
</html>
