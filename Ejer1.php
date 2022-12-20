<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first PHP page</title>
</head>
<body>
  <h1>hello world</h1>
  <p>what is the current time and date?</p>  
  <p>your current time and date is:
    <?php
    echo date("d.m.Y H:i:S");
    ?>,</p>
</body>
</html>