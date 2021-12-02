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
<form action="registrace.php" method="get">
    <label for="jmeno"> Jméno:</label> <input type="text" id="jmeno" name="name" placeholder="vaše jméno" /><br />
    E-mail: <input type="email" name="email" placeholder="váš email" /><br />
    Věk: <input type="text" name="age" placeholder="váš věk" /><br />
    <label>Pamatuj si mne: <input type="checkbox" name="remember" /></label><br />
    <input type="submit" value="Odeslat" />
</form>

<form method='get' action="registrace.php" >
    <input type="checkbox" name="jidlo[pizza][]" value="šunková" />Šunková<br />
    <input type="checkbox" name="jidlo[pizza][]" value="hawaii" />Hawaii<br />
    <input type="checkbox" name="jidlo[pizza][]" value="quatro" />Čtyři roční období<br />
    <input type="submit" value="odeslat" />
</form>


</body>
</html>
