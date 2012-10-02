<!DOCTYPE html>
<html>
 <head>
  <script>
   function change () {
    var goto="https://127.0.0.1:84201/";
    var nHref=goto.concat(window.location);
    window.location.replace(nHref); }
  </script>
 </head>
 <body onload="change()">
  <h1>Redirecting...</h1>
  <p>If you are not automatically redirected,</p>
  <button type="button" onclick="change()">click here</button>
 </body>
</html>
