var xmlHttp

function showUser()
{ 
var u=register.users.value;
var p=register.pwd.value;
var v=register.sure_pwd.value;
if(p!=v)
{
alert("please input the password again");
return;
}
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="teacher_register.php"
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