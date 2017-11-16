<?php
$host="127.0.0.1";
$username="root";
$password="mysql";
$con=mysql_connect($host,$username,$password);
mysql_select_db("my_db", $con);
$temp=$_GET["q"];
$temp1=$_GET["p"];
mysql_query("SET NAMES 'gb2312'");
$sql = "SELECT password FROM admin_p WHERE user='".$temp."';";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
  {
 if(strcasecmp($row['password'],$_GET["p"])==0)
 {
     echo "ok"; 
 }
 else
 {
 echo "bad";
 }
}
?>