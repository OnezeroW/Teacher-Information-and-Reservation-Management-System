var xmlHttp
var a;
function jump()
{
	window.location.href="sregister.php";
}
function showUser()
{ 
var u=register.users.value;
var p=register.pwd.value;
a=u;
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="judge_s.php"
url=url+"?q="+u+"&p="+p
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 var myresponse=String(xmlHttp.responseText);
if(myresponse=='ok')
{
//document.write(myresponse);
alert( myresponse);
window.location.href="student.php"+"?name="+a;
}
else
{
	alert( myresponse);
window.location.href="sregister.php";
}
// document.getElementById("txtHint").innerHTML=xmlHttp.responseText  
 
  }
  return false;
}
function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
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