var xmlHttp
var a;

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
var url="judge_t.php"
url=url+"?q="+u+"&p="+p
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 var myresponse=String(xmlHttp.responseText);
 alert(myresponse);
if(myresponse=='ok')
{
alert(a);
window.location.href="teacher.php"+"?name="+a;
}
else
{
	alert( myresponse);
window.location.href="tregister.php";
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