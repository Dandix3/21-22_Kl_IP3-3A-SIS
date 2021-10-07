<html>
  <head>
    <title>Tabulka škol</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>
  <body class="container">
    <?php
    
$vitezove = [
    "Gymnázium, Brno, třída Kapitána Jaroše 14" =>
        ["Kryštof Kolář", "Jan Šorm", "Zdislava Karásková", "Kateřina Bžatková", "Jan Dittrich", "Michal Reška", "Timotej Šujan"],
    "Gymnázium Jura Hronca, Bratislava" =>
        ["Zhen Ning David Liu", "Zuzana Frankovská", "Matej Králik", "Samuel Sučík", "Branislav Pilňan", "Ondrej Bohdal", "Michaela Brezinová"],
    "Gymnázium Jakuba Škody" =>
        ["Petr Vincena", "Markéta Calábková", "Marian Poljak", "Martin Kubeša", "Jan Šuta", "Jan Gocník", "Tomáš Kremel"],
    "Gymnázium Česká Třebová, Tyršovo nám. 970" =>
        ["Radovan Švarc", "Vojtěch Mikuláš", "Martin Stříteský", "Kateřina Průžková", "Jakub Reger", "Jakub Řehák", "Lukáš Kovář"],
    "Gymnázium Jihlava" =>
        ["Viktor Němeček", "Dominika Krásenská", "Zbyšek Voda", "Ondřej Holub", "Jan Čech", "František Koumar", "Jan Brukner"],
    "Gymnázium Matyáše Lercha, Brno, Žižkova 55" =>
        ["Mojmír Poprocký", "Jan Jurka", "Benedikt Peťko", "Michal Mrnuštík", "Karolína Kuchyňová", "Marek Mikulec", "Dalena Morávková"],
    "Gymnázium Opatov" =>
        ["Filip Bialas", "Anička Suchánková", "Zuzana Johanovská", "Martina Nováková", "Petr Jaroschy", "Jakub Sláma", "Mirek Kubů"],
    "Gymnázium Olomouc-Hejčín" =>
        ["Hong Quan Tran", "David Řehulka", "David Charvot", "Pavel Turek", "Filip Blažek", "Vojtěch Daniš", "David Procházka"],
    "Wichterlovo gymnázium, Ostrava-Poruba, p.o." =>
        ["Ondřej Divina", "Jan Špaček", "Pavel Gajdušek", "Alexandr Nikitin", "Jiří Škrobánek", "Martin Raška", "Tat Dat Duong"],
    "Gymnázium Jana Keplera" =>
        ["Jiří Kučera", "Štěpán Marek", "Martin Mach", "Dalimil Hájek", "Jiří Balhar", "Jiří Zbytovský", "Karel Jílek"],
]; 

$poradi = 1;
$html = "<table class='table table-striped'>";
$html .= "<tr><th>Pořadí</th><th>Škola</th><th>Žáci</th></tr>";
foreach ($vitezove as $skola => $lide) {
    $html .= "<tr>"
            . "<td>{$poradi}.</td>"
            . "<td>".htmlspecialchars($skola)."</td>"
            . "<td>".htmlspecialchars(implode(", ", $lide))."</td>"
        . "</tr>";
    $poradi++;
}
$html .= "</table>";

echo $html;
    
     ?> 
  </body>
</html>