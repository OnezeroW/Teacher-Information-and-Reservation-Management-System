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
$f=$_GET["f"];
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
mysql_query("SET NAMES 'gb2312'");
$sql="SELECT * FROM t_time where tname='".$temp."';";
$result = mysql_query($sql);
if($f==0){
echo "<table border='1' id='table4'>
<tr>
<th>教师信息</th>
<th>月</th>
<th>日</th>
<th>节</th>
<th>修改</th>
<th>删除</th>
</tr>";
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['tname'] . "</td>";
 echo "<td>" . $row['month'] . "</td>";
 echo "<td>" . $row['day'] . "</td>";
  echo "<td>" . $row['section'] . "</td>";
   echo   "<td >" ."<input name='b6' type='button' value='更改' onclick='User_modify($i);'/>" . "</td>";
   echo   "<td >" ."<input name='b7' type='button' value='删除' onclick='User_delete($i);'/>" . "</td>";
 echo "</tr>";
 $i++;
 }
echo "</table>";}
else
{
echo "<form id='modify' name='modify' >   
月份：
 <select name='month' id='month'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>
日期：
<select name='day' id='day'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>

第几大节：
<select name='section' id='section'>
<option value='0' selected='true'>(null)</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>
<input name='b6' type='button' value='确认' onclick='sure_modify();'/>
 </form >  ";
}
mysql_close($con);
?>
</body>
</html>
