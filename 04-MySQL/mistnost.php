<?php

require_once ("include/db_connect.php");

$state = "OK";

$roomId = filter_input(INPUT_GET, "room_id", FILTER_VALIDATE_INT);

if ($roomId === null) {
    http_response_code(400); //bad request
    $state = "BadRequest";
} else {

    $query = "SELECT * FROM room WHERE room_id=:roomId";

    $pdo = DB::connect();
    $stmt = $pdo->prepare($query);
    $stmt->execute(["roomId" => $roomId]);

    if ($stmt->rowCount() == 0) {
        http_response_code(404);
        $state = "NotFound";
    } else {
        $room = $stmt->fetch();
    }
}


?>
<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail místosti</title>
</head>
<body>
<?php
if ($state === "OK") {
    echo "<h1>Místnost: " . $room->name . "</h1>";
    echo "Číslo: " . $room->no . "<br>";
    echo "Tel: " . $room->phone;
} elseif ($state === "NotFound") {
    echo "<h1>Místnost nenalezena</h1>";
} elseif ($state === "BadRequest") {
    echo "<h1>Chybný požadavek</h1>";
}
?>
</body>
</html>
