<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie Dump</title>
</head>
<body>
<?php
//    $pizza = isset($_COOKIE['pizza']) ? $_COOKIE['pizza'] : "Nic tam není";
//var_dump($_COOKIE);
//echo "<p>" . ( $pizza) . "</p>";

echo "<p>" . ( $_COOKIE['pizza'] ?? "Nic tam není" ) . "</p>";
?>
</body>
</html>

