<!DOCTYPE html>
<html lang="en">
 <head>
  <script type="text/javascript">
   function change () {
    var loc=window.location;
    var goto="https://127.0.0.1:84201/";
    var nHref=goto.concat(loc);
    window.location.replace(nHref); }
  </script>
 </head>
 <body onload="change()">
  <h1>Redirecting...</h1>
  <p>If you are not redirected, click </p>
  <button type="button" onclick="change()">here</button>
 </body>
</html>
