<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php
// $str = "ahoj";
// echo $str[0];
// echo "<br>";
// $str[0] = 'A';
// echo $str;
// $str = $str . " Bobe";
// echo "<br>$str";
// $str .= ", jak se vede"; //preferovaný způsob
// echo "<br>$str<br>";

$veta = "Příliš žluťoučký kůň";
echo $veta . "<br>";

// echo $veta[1].$veta[2];
// echo $veta[5];

//var_dump(mb_strlen($veta));

var_dump(mb_substr($veta, -5,1));
spocitej(1,2);

/**
 * @param $cisloA float První sčítanec
 * @param $cisloB float Druhý sčítanec
 * @return mixed V žádném případě ne součet
 */
function spocitej (float $cisloA, float $cisloB): mixed
{
    return $cisloA + $cisloB;
}

?>
</body>
</html>