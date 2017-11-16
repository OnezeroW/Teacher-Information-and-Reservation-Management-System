<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text; charset=gb2312" />
<title>无标题文档</title>
<script >
var xmlHttp_s
var xmlHttp_t
var xmlHttp_t_message
var xmlHttp_t_time
var num
//var xmlHttp
function modify_message()
{
xmlHttp_modify=GetXmlHttpObject();
 var n=document.getElementById('table3').rows[num].cells[0].innerHTML;
var message=this.modify.t.value;
alert(message);
var url="a_modify.php";
url=url+"?message="+message+"&n="+n;
url=url+"&sid="+Math.random()
xmlHttp_modify.open("GET",url,true)
xmlHttp_modify.send(null)
}
function modify_detail(a)
{
num=a;
 var k=document.getElementById('table3').rows[a].cells[4].innerHTML;
 alert(k);
 document.getElementById("t").innerHTML=String(k);
}
function show_student()
{
xmlHttp_s=GetXmlHttpObject();
var url="find_s.php";
//url=url+"&sid="+Math.random()
xmlHttp_s.onreadystatechange=stateChanged_s
xmlHttp_s.open("GET",url,true);
xmlHttp_s.send(null);
}

function stateChanged_s() 
{ 
if (xmlHttp_s.readyState==4 || xmlHttp_s.readyState=="complete")
 { 
  document.getElementById("txtHint_s").innerHTML=xmlHttp_s.responseText 
  }
  return false;
}
function User_reset(a)
{
xmlHttp_sreset=GetXmlHttpObject();
var n=document.getElementById('table1').rows[a].cells[0].innerHTML
var url="s_reset.php";
url=url+"?n="+n;
url=url+"&sid="+Math.random()
xmlHttp_sreset.open("GET",url,true)
xmlHttp_sreset.send(null)
}
function User_reset1(a)
{
xmlHttp_treset=GetXmlHttpObject();
var n=document.getElementById('table2').rows[a].cells[0].innerHTML
var url="t_reset.php";
url=url+"?n="+n;
url=url+"&sid="+Math.random()
xmlHttp_treset.open("GET",url,true)
xmlHttp_treset.send(null)
}
function show_teacher()
{
xmlHttp_t=GetXmlHttpObject()
if (xmlHttp_t==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="find_t.php"
//url=url+"&sid="+Math.random()
xmlHttp_t.onreadystatechange=stateChanged_t 
xmlHttp_t.open("GET",url,true)
xmlHttp_t.send(null)
}

function stateChanged_t() 
{ 
if (xmlHttp_t.readyState==4 || xmlHttp_t.readyState=="complete")
 { 
  document.getElementById("txtHint_t").innerHTML=xmlHttp_t.responseText 
  }
  return false;
}

function show_t_message()
{
xmlHttp_t_message=GetXmlHttpObject()
if (xmlHttp_t_message==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="find_t_message.php"
//url=url+"&sid="+Math.random()
xmlHttp_t_message.onreadystatechange=stateChanged_m 
xmlHttp_t_message.open("GET",url,true)
xmlHttp_t_message.send(null)
}

function stateChanged_m() 
{ 
if (xmlHttp_t_message.readyState==4 || xmlHttp_t_message.readyState=="complete")
 { 
  document.getElementById("txtHint_t_message").innerHTML=xmlHttp_t_message.responseText 
  }
  return false;
}

function show_t_time()
{
xmlHttp_t_time=GetXmlHttpObject()
if (xmlHttp_t_time==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="find_t_time.php"
//url=url+"&sid="+Math.random()
xmlHttp_t_time.onreadystatechange=stateChanged_time
xmlHttp_t_time.open("GET",url,true)
xmlHttp_t_time.send(null)
}

function stateChanged_time() 
{ 
if (xmlHttp_t_time.readyState==4 || xmlHttp_t_time.readyState=="complete")
 { 
  document.getElementById("txtHint_t_time").innerHTML=xmlHttp_t_time.responseText 
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

<body text="brown" background="管理员.jpg">
<table width='1300'>
<tr>
<td width='500'>
<form id="find_s" name="find_s" > 
★学生账号查询
<input name="b2" type="button" value="确认" onclick="show_student();"/>
</form>
</td>
<td  rowspan='20'><p> <span id="txtHint_s"></span></p>
<p> <span id="txtHint_t"></span></p>
<p><span id="txtHint_t_message"></span></p>
<p> <span id="txtHint_t_time"></span></p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<form id="find_t" name="find_t" > 
★教师账号查询
<input name="b1" type="button" value="确认" onclick="show_teacher();"/>
</form>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<form id="find_t_message" name="find_t_message" > 
★教师科研信息查询
<input name="b3" type="button" value="确认" onclick="show_t_message();"/>
</form>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<form id="find_t_time" name="find_t_time" > 
★教师日程信息查询
<input name="b4" type="button" value="确认" onclick="show_t_time();"/>
</form>
</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td>
<form id="modify" name="modify" > 
★修改教师信息
</td>
</tr>
<tr>
<td>
<textarea name="t" cols="30" rows="10" id="t" style="background-color:transparent"></textarea>
<input name="b5" type="button" value="确认" onclick="modify_message();"/>
</form>
</td>
</tr>

</body>
</html>