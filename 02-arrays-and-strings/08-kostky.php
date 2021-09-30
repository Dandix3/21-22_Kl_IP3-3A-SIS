<?php

function dice(int $faces = 6) : int {
    return rand(1, $faces);
}


function diceSum(int $rollCnt, int $faces = 6) : int {
    $sum = 0;
    for ($i = 0; $i < $rollCnt; $i++) {
        $sum += dice($faces);
    }
    return $sum;
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dice</title>
</head>
<body>
<?php

echo "<h2>10 hodů</h2>";
$rolls = [];
for ($i = 0; $i < 10; $i++) {
    $rolls[] = dice();
}
echo "<p>" . implode(", ", $rolls) . "</p>";

echo "<h2>10 &times; 5 hodů</h2>";
$rolls = [];
for ($i = 0; $i < 10; $i++){
    $rolls[] = diceSum(5);
}
echo "<p>" . implode(", ", $rolls) . "</p>";





echo "<h2>Moc hodů</h2>";

$rollCount = 100000; //kolik opakování
$sumCount = 5; //kolik hodů sčítat

$faces = 6;

$minValue = $sumCount;
$maxValue = $sumCount * $faces;

$data = [];
for ($i = $minValue; $i <= $maxValue; $i++){
    $rolls[$i] = 0;
}

for ($i = 0; $i < $rollCount; $i++){
    $result = diceSum($sumCount);
    $rolls[$result]++;
}

echo "<p>" . implode(", ", $rolls) . "</p>";

arsort($rolls);

var_dump($rolls);

$top = array_slice($rolls, 0, 10, true);
foreach ($top as $sum => $count) {
    echo $sum  . ":" . round($count / $rollCount * 100, 2) . "%<br/>";
}


?>
</body>
</html>
