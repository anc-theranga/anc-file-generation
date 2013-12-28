<?php

// COPYRIGHT (c) Alec Barber 2012
// ALL UNAUTHORISED COPYING, MODIFICATION, EXPLOITATION FOR ANY FORM OF GAIN AND OTHER ACTIVITIES (EXCEPT USE AS A WEBPAGE - ie ACCESS OF vast-ridge-8542.herokuapp.com FROM A WEB BROWSER) ARE EXPRESSLY PROHIBITED WITHOUT THE EXPRESS PERMISSION OF THE COPYRIGHT HOLDER.
// THOSE GRANTED PERMISSION TO DO ANY OF THE ABOVE WITH THIS WORK CANNOT GIVE, SELL, BEQUEATH OR TRANSFER IN ANY WAY THE WHOLE OR ANY PART OF THAT PERMISSION TO OTHERS.

$uri=replace('#','&',$_SERVER['REQUEST_URI']);
$nURL=sprintf("Location: http://%s/%s",$_GET['ip'],$uri);
// header($nURL,true,302);

?>

<!-- COPYRIGHT (c) Alec Barber 2012 -->
<!-- ALL UNAUTHORISED COPYING, MODIFICATION, EXPLOITATION FOR ANY FORM OF GAIN AND OTHER ACTIVITIES (EXCEPT USE AS A WEBPAGE - ie ACCESS OF vast-ridge-8542.herokuapp.com FROM A WEB BROWSER) ARE EXPRESSLY PROHIBITED WITHOUT THE EXPRESS PERMISSION OF THE COPYRIGHT HOLDER. -->
<!-- THOSE GRANTED PERMISSION TO DO ANY OF THE ABOVE WITH THIS WORK CANNOT GIVE, SELL, BEQUEATH OR TRANSFER IN ANY WAY THE WHOLE OR ANY PART OF THAT PERMISSION TO OTHERS. -->

<DOCTYPE html>
<html>
<head>
<title>Redirecting...</title>
</head>
<body>
<h1>Redirecting...</head>
<h3>Debug data:</h3>
<p><?php echo $_GET['ip']; ?><br >
<?php echo $_SERVER['REQUEST_URI']; ?><br >
<?php echo replace('#','&',$_SERVER['REQUEST_URI']; ?><br >
<?php printf("%s %s",$_GET['ip'],replace('#','&',$_SERVER['REQUEST_URI'])); ?><br ></p>

<br ><br >
<p><i>Copyright (c) Alec Barber 2012</i><br >
<i>Web design by </i>Alec Barber.<br >
<i>All rights reserved</i></p>
</body>
</html>
