<?php

// COPYRIGHT (c) Alec Barber 2012
// ALL UNAUTHORISED COPYING, MODIFICATION, EXPLOITATION FOR ANY FORM OF GAIN OR OTHER ACTIVITIES ARE EXPRESSLY PROHIBITED

$nURL=vsprintf("Location: http://%s/%s",array($_GET['ip'],$_SERVER['REQUEST_URI']));
header($nURL,true,302);

?>

<html>
<head>
<title>Redirecting...</title>
<meta name="robots" content="noindex, nofollow"></meta>
</head>
</html>
