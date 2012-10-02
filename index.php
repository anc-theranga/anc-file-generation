<?php
$loc="https://127.0.0.1/";
$nLoc=$loc . $_SERVER["REQUEST_URI"];
header($nLoc,true,302);
?>

<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
  <h1>Redirecting...<br><br></h1>
  <h3>As you have not been automatically redirected, type <code>https://127.0.0.1:84201/</code> before the URL current in your browser's address bar</h3>
 </body>
</html>
