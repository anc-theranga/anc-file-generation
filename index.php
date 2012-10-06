<?php
?>

<!DOCTYPE html>
<html>
<head>
<script>
function func ()
{
var poshash;
var posip;
var posamp;
var ip;
var args;
var firstPart;
var url=new String (location);
var nURI;
poshash=url.indexOf("#access_token");
posip=url.indexOf("?ip=");
posip=posip+4;
ip=url.substring(posip,poshash);
posamp=url.indexOf("&");
args=url.substring(poshash+1);
firstPart="http://";
nURI=firstPart.concat(ip,"/?",args);
window.location.replace(nURI);
}
</script>
</head>
<body onload="func()">
<h1>Redirecting...<br><br></h1>
<h3>If you are not redirected in 5 seconds,</h3>
<button type="button" onlick="func()">click here</button>
</body>
</html>
