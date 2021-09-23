<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$pole = [];
$pole[0] = "Rohlíky";
$pole[1] = "Mlíko";

$pole[] = "Pálenka";

$pole[64] = "Kyanid";
$pole[16] = "Housky";
$pole[0] = "Buchty";
$pole[] = "Máslo";

$pole["nezapomeň"] = "Zavolat babičce";

var_dump($pole);

var_dump(count($pole));

echo "<ul>";
foreach ($pole as $index => $item) {
    echo "<li>$index:$item</li>";
}
echo "</ul>";


$adresy = [
    "Karel" => "V polích 1",
    "Eman" => "Rozkopané náměstí 6",
];

var_dump($adresy);


$mista = $adresy;
$mista["Karel"] = "Za poli 5";

var_dump($mista);
var_dump($adresy);

?>
</body>
</html>
