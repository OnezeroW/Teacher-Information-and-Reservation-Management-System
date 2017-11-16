<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<script >
var t="<?=$name?>"
var xmlHttp
var xmlHttp_time
var xmlHttp_appointment
var xmlHttp_check_app
var xmlHttp_recommand
var xmlHttp_p
function showUser_password()
{
xmlHttp_p=GetXmlHttpObject();
var newp=password.newp.value;
var oldp=password.oldp.value;
if(newp!=oldp)
{
alert("please input the password again");
return;
}
var url="s_pass.php";
url=url+"?t="+t+"&newp="+newp+"&oldp="+oldp;
url=url+"&sid="+Math.random()
xmlHttp_p.onreadystatechange=stateChanged_pp 
xmlHttp_p.open("GET",url,true)
xmlHttp_p.send(null)
alert("success!");
}
function stateChanged_pp() 
{ 
if (xmlHttp_p.readyState==4 ||xmlHttp_p.readyState=="complete")
 { 
  document.getElementById("txtHint_pp").innerHTML=xmlHttp_p.responseText ;
  }
  return false;
}

function User(a)
 {
 var k=document.getElementById('table2').rows[a].cells[4].innerHTML;
    alert(k);
 }
 function User1(a)
 {
 var k=document.getElementById('table3').rows[a].cells[7].innerHTML;
    alert(k);
 }
  function User2(a)
 {
 var k=document.getElementById('table4').rows[a].cells[4].innerHTML;
    alert(k);
 }
  function User3(a)
 {
 var k=document.getElementById('table0').rows[a].cells[7].innerHTML;
    alert(k);
 }
function showUser_recommand()
{
var k=recommand.kind.value;
var m=recommand.month.value;
var db=recommand.begin_day.value;
var de=recommand.end_day.value;
var s=recommand.section.value;
xmlHttp_recommand=GetXmlHttpObject();
var url="s_recommamd.php"
url=url+"?k="+k+"&m="+m+"&db="+db+"&de="+de+"&s="+s;
url=url+"&sid="+Math.random()
xmlHttp_recommand.onreadystatechange=stateChanged_recommand 
xmlHttp_recommand.open("GET",url,true)
xmlHttp_recommand.send(null)
}

function stateChanged_recommand() 
{ 
if (xmlHttp_recommand.readyState==4 ||xmlHttp_recommand.readyState=="complete")
 { 
 //alert(xmlHttp_recommand.responseText);
  document.getElementById("txtHint_reserve").innerHTML=xmlHttp_recommand.responseText ;
  }
  return false;
}

function showUser_check_app()
{
xmlHttp_check_app=GetXmlHttpObject();
var url="check_app.php"
url=url+"?q="+t;
url=url+"&sid="+Math.random()
xmlHttp_check_app.onreadystatechange=stateChanged_check
xmlHttp_check_app.open("GET",url,true)
xmlHttp_check_app.send(null)
}
function stateChanged_check() 
{ 
if (xmlHttp_check_app.readyState==4 ||xmlHttp_check_app.readyState=="complete")
 { 
 //alert(xmlHttp_check_app.responseText);
  document.getElementById("txtHint_appointment").innerHTML=xmlHttp_check_app.responseText ;
  }
  return false;
}

function showUser_appointment()
{
var u=reserve.appointment.value;
var m=reserve.month.value;
var d=reserve.day.value;
var s=reserve.section.value;
var message=reserve.t.value;
//alert(message);
xmlHttp_appointment=GetXmlHttpObject()
var url="s_appointment.php"
url=url+"?q="+u+"&p="+t+"&m="+m+"&s="+s+"&d="+d+"&message="+message;
url=url+"&sid="+Math.random()
xmlHttp_appointment.onreadystatechange=stateChanged_app 
xmlHttp_appointment.open("GET",url,true)
xmlHttp_appointment.send(null)
}
function stateChanged_app() 
{ 
if (xmlHttp_appointment.readyState==4 ||xmlHttp_appointment.readyState=="complete")
 { 
 //alert(xmlHttp_appointment.responseText);
 //document.getElementById("txtHint_appointment").innerHTML=xmlHttp_appointment.responseText ;
 var f=xmlHttp_appointment.responseText ;
 if(f==1)
 alert("Have a successful appointment!");
 else
 alert("No this teacher!");
  }
  return false;
}




function showUser_time()
{
var u=register.time.value;
xmlHttp_time=GetXmlHttpObject()
var url="s_time.php"
url=url+"?q="+u
url=url+"&sid="+Math.random()
xmlHttp_time.onreadystatechange=stateChanged_time 
xmlHttp_time.open("GET",url,true)
xmlHttp_time.send(null)
}
function stateChanged_time() 
{ 
if (xmlHttp_time.readyState==4 ||xmlHttp_time.readyState=="complete")
 { 
  document.getElementById("txtHint_time").innerHTML=xmlHttp_time.responseText 
  }
  return false;
}


function showUser()
{ 
var u=register.users.value;
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="s_select.php"
url=url+"?q="+u
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
  document.getElementById("txtHint").innerHTML=xmlHttp.responseText ;
  }
  return false;
}


function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
</script>
</head>

<body background="学生背景.jpg">
<?php  echo $name;?>
<table width='1300'>
<tr>
<td width='660'>
★教师查询★
</td>
<td  rowspan='20'><p><span id="txtHint"></span></p>
<p><span id="txtHint_time"></span></p>
<p><span id="txtHint_reserve"></span></p>
<p><span id="txtHint_appointment"></span></p>
</td>
</tr>
<form id="register" name="register" > 
<tr>
<td>
教师信息查询:
<input id="users"  name="users" type="test" />
<input name="b1" type="button" value="确认" onclick="showUser();"/>
</td>
</tr>
<tr>
<td>
教师日程查询:
<input id="time"  name="time" type="test" />
<input name="b2" type="button" value="确认"  onclick="showUser_time();"/>
</td>
</tr>
</form>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
★教师推荐★
<form id="recommand" name="recommand">
</td>
</tr>
<tr>
<td>
请选择类别：
<input id="kind"  name="kind" type="test" />
</td>
</tr>
<tr>
<td>
请选择时间：

<select name="month" id="month">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
月&nbsp;&nbsp;
<select name="begin_day" id="begin_day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
~
<select name="end_day" id="end_day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
日&nbsp;&nbsp;第
<select name="section" id="section">
<option value="0" selected="true">(null)</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
节
<input name="b6" type="button" value="确认" onclick="showUser_recommand();"/>
</form>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
★教师预约★
</td>
</tr>
<tr>
<td>
<form id="reserve" name="reserve" > 
教师姓名：

<input id="appointment"  name="appointment" type="test" />
<select name="month" id="month">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
月
<select name="day" id="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
日&nbsp;&nbsp;第
<select name="section" id="section">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
节
<br>
<textarea name="t" cols="80" rows="10" id="t" style="background-color:transparent"></textarea>
<br>
<input name="b3" type="button" value="提交预约" onclick="showUser_appointment();"/>
</form>

<form id="check_app" name="check_app" > 
<input name="b5" type="button" value="预约查询" onclick="showUser_check_app();"/>
</form>
</td>

</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
★修改密码★
<form id="password" name="password">
</td>
</tr>
<tr>
<td>
输入新密码：
<input id="oldp"  name="oldp" type=password />
</td>
</tr>
<tr>
<td>
确认新密码：
<input id="newp"  name="newp" type=password />
<input name="b0" type="button" value="确认修改" onclick="showUser_password();"/>
</form>
</td>
</tr>
</table>
</body>
</html>