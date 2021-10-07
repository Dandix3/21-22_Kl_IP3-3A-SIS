<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        html, body {
            font-family: Calibri, sans-serif;
        }
        div.strom {
            margin: 1rem 1rem 0;
        }
    </style>
</head>
<body>
<?php
$stromy = [
    [
        "jméno" => "dub",
        "plod" => "žalud",
        "typ" =>"listnatý"
    ],
    [
        "jméno" => "jabloň",
        "plod" => "jablko",
        "typ" =>"listnatý"
    ],
    [
        "jméno" => "modřín",
        "plod" => "šiška",
        "typ" =>"jehličnatý"
    ],
];

function vypisStrom($strom) {
    echo "<div class='strom'>";

//            foreach ($strom as $vlastnost => $hodnota) {
//                echo "<span class='vlastnost'>";
//                echo "<span class='klic'>". htmlspecialchars($vlastnost)."</span>: ";
//                echo "<span class='hodnota'>". htmlspecialchars($hodnota)."</span>";
//                echo "</span><br />";
//            }
    $vlastnosti = [];
    foreach ($strom as $vlastnost => $hodnota) {
        $radek = "<span class='vlastnost'>";
        $radek .= "<span class='klic'>". htmlspecialchars($vlastnost)."</span>: ";
        $radek .= "<span class='hodnota'>". htmlspecialchars($hodnota)."</span>";
        $radek .= "</span>";
        $vlastnosti[] = $radek;
    }
    echo implode("<br />", $vlastnosti);
    echo "</div>";
}

foreach ($stromy as $strom) {
    vypisStrom($strom);
}
?>
</body>
</html>