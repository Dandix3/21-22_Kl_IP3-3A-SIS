<?php

function htmlSelect( string $name, array $options, string $selected = "") : string {

    $html = "<select name='$name'>\n";
    foreach ($options as $key => $text) {
        $paramHtml = $selected === $key ? " selected" : "";
        $html .= "<option value='$key'{$paramHtml}>".htmlspecialchars($text)."</option>\n";
    }
    $html .= "</select>\n";

    return $html;

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html Select</title>
</head>
<body>
<p></p>
<?php

$options = [
    "volvo" => "Volvo",
    "bmw" => "BMW",
    "trabant" => "Trabant",
    "skoda" => "Škoda",
    "lak" => "Laurin & Klement",
];

echo htmlSelect( "auto", $options);


//
//$options = [
//    "p" => "<p>",
//    "h1" => "<h1>",
//    "em" => "<em>",
//    "strong" => "<strong>"
//];
//echo htmlSelect( "tag", $options, "p" );

?>
</body>
</html>
