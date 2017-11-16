<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<script >
var t="<?=$name?>"
var num;
function showUser_password()
{
xmlHttp_p=GetXmlHttpObject();
var newp=password.newp.value;
var oldp=password.oldp.value;
alert(newp);alert(oldp);
if(newp!=oldp)
{
alert("please input the password again");
return;
}
var url="t_pass.php";
url=url+"?t="+t+"&newp="+newp+"&oldp="+oldp;
url=url+"&sid="+Math.random()
xmlHttp_p.open("GET",url,true)
xmlHttp_p.send(null)
}

function showUser_checktime()
{
//alert("check");
xmlHttp_time=GetXmlHttpObject()
var url="t_time.php";
url=url+"?q="+t+"&f="+0;
url=url+"&sid="+Math.random()
xmlHttp_time.onreadystatechange=stateChanged_time
xmlHttp_time.open("GET",url,true)
xmlHttp_time.send(null)
}
function stateChanged_time() 
{ 
if (xmlHttp_time.readyState==4 || xmlHttp_time.readyState=="complete")
 { 
  document.getElementById("txtHint_time").innerHTML=xmlHttp_time.responseText 
  }
  return false;
}
function User_delete(a)
{
xmlHttp_delete=GetXmlHttpObject();
var n=document.getElementById('table4').rows[a].cells[0].innerHTML;
var m=document.getElementById('table4').rows[a].cells[1].innerHTML;
var d=document.getElementById('table4').rows[a].cells[2].innerHTML;
var s=document.getElementById('table4').rows[a].cells[3].innerHTML;
//alert(n);alert(m);alert(d);alert(s);
var url="t_delete.php";
url=url+"?n="+n+"&m="+m+"&s="+s+"&d="+d;
xmlHttp_delete.open("GET",url,true)
xmlHttp_delete.send(null)
showUser_checktime();
}
function sure_modify()
{

xmlHttp_sure=GetXmlHttpObject();
var n=document.getElementById('table4').rows[num].cells[0].innerHTML;
var m=document.getElementById('table4').rows[num].cells[1].innerHTML;
var d=document.getElementById('table4').rows[num].cells[2].innerHTML;
var s=document.getElementById('table4').rows[num].cells[3].innerHTML;
var nm=modify.month.value;
var nd=modify.day.value;
var ns=modify.section.value;
var url="t_modify.php";
url=url+"?nm="+nm+"&nd="+nd+"&ns="+ns+"&n="+n+"&m="+m+"&d="+d+"&s="+s;
xmlHttp_sure.onreadystatechange=stateChanged_suremodify
xmlHttp_sure.open("GET",url,true)
xmlHttp_sure.send(null)
}
function stateChanged_suremodify()
{
if (xmlHttp_sure.readyState==4 || xmlHttp_sure.readyState=="complete")
 { 
  document.getElementById("txtHint_suremodify").innerHTML=xmlHttp_sure.responseText 
  }
  return false;
}
function User_modify(a)
{num=a;

xmlHttp_modify=GetXmlHttpObject();
var url="t_time.php";
url=url+"?f="+1;
xmlHttp_modify.onreadystatechange=stateChanged_modify
xmlHttp_modify.open("GET",url,true)
xmlHttp_modify.send(null)
}
function stateChanged_modify() 
{ 
if (xmlHttp_modify.readyState==4 || xmlHttp_modify.readyState=="complete")
 { 
  document.getElementById("txtHint_modify").innerHTML=xmlHttp_modify.responseText 
  }
  return false;
}


function User2(a)
 {
 var k=document.getElementById('table1').rows[a].cells[8].innerHTML;
    alert(k);
 }
 function User3(a)
 {
 var k=document.getElementById('table0').rows[a].cells[7].innerHTML;
    alert(k);
 }
function User(a)
{
xmlHttp_app=GetXmlHttpObject()
var message=this.message.t.value;
 k=document.getElementById('table1').rows[a].cells[0].innerHTML;  
var url="sure_app.php"
url=url+"?q="+k+"&message="+message;
url=url+"&sid="+Math.random()
xmlHttp_app.onreadystatechange=stateChanged 
xmlHttp_app.open("GET",url,true)
xmlHttp_app.send(null)
}

function showUser_addtime()
{
xmlHttp_add=GetXmlHttpObject();
var m=add_time.month.value;
var d=add_time.day.value;
var s=add_time.section.value;
var url="t_addtime.php";
url=url+"?t="+t+"&m="+m+"&d="+d+"&s="+s;
xmlHttp_add.open("GET",url,true)
xmlHttp_add.send(null)
}

function showUser()
{ 
alert(t);

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="t_select.php"
url=url+"?q="+t;
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
  document.getElementById("txtHint").innerHTML=xmlHttp.responseText 
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

<body text="grey" background="教师背景.jpg">
<?php  echo $name;?>

<table width='1300'>
<tr>
<td width='660'>
<form id="appointment" name="appointment" > 
★预约查询
<input name="b1" type="button" value="查询" onclick="showUser();"/>

</form>
</td>
<td  rowspan='20'><p><span id="txtHint"></span></p>
<p><span id="txtHint_time"></span></p>
<p><span id="txtHint_modify"></span></p>
<p><span id="txtHint_suremodify"></span></p></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
留言框：
<form id="message" name="message" > 
<textarea name="t" cols="80" rows="10" id="t" style="background-color:transparent"></textarea>
</form>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<form id="check_time" name="check_time" > 
★查看日程

<input name="b2" type="button" value="确认" onclick="showUser_checktime();"/>
</form>
</td>
</tr>

<tr>
<td>
<form id="add_time" name="add_time" > 
★添加日程

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
月
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
日&nbsp;第
<select name='section' id='section'>
<option value='0' selected='true'>(null)</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>

节
<input name="b3" type="button" value="确认" onclick="showUser_addtime();"/>
</form>

</td>
</tr>



<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
★修改密码
</td>
</tr>
<form id="password" name="password">
<tr>
<td>
旧密码：

<input id="oldp"  name="oldp" type=password />
</td>
</tr>
<tr>
<td>
新密码：
<input id="newp"  name="newp" type=password />
<input name="b0" type="button" value="确认修改" onclick="showUser_password();"/>
</form>
</td>
</tr>
</table>
</body>
</html>