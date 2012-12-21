<?php

// COPYRIGHT (c) Alec Barber 2012
// ALL UNAUTHORISED COPYING, MODIFICATION, EXPLOITATION FOR ANY FORM OF GAIN OR OTHER ACTIVITIES ARE EXPRESSLY PROHIBITED

$nURL=vsprintf("Location: https://www.idontexist.com/%s",array($_SERVER['REQUEST_URI']));
header($nURL,true,302);
header("Content-length: 0\r\n\r\n",true);

?>

<!DOCTYPE html>
<!-- COPYRIGHT (c) Alec Barber 2012 -->
<!-- ALL UNAUTHORISED COPYING, MODIFICATION, EXPLOITATION FOR ANY FORM OF GAIN OR OTHER ACTIVITES ARE EXPRESSLY PROHIBITED -->
<html>
<head>
<title>Redirecting...</title>
<meta name="robots" content="noindex,nofollow"></meta>
</head>
<body onload="func()">
<h1>Redirecting...<br><br></h1>
<!-- PUT IN THE URL FOR LOGOUT -->
<p>This page should redirect shortly. If it does not, it means that while authenticating your login details, this page failed to redirect to <a href="http://www.facebook.com/">Facebook</a>. Please refresh this page or try again later. Please note that you are currently logged in to FaceBook. If you wish to log out please follow these instructions:</p>
<br>
<li>Go to <a href="facebook.com">facebook.com</a>.</li>
<li>Next to the '<code>Home</code>' button in the top right corner of you screen, there is a down arrow. Click on that and select '<code>Privacy settings</code>'
</body>
</html>
