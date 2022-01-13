<?php

abstract class Zvire
{
    private static int $pocet = 0;

    public static function getPocet() : int {
        return self::$pocet;
    }

    private string $barva;

    public function __construct(string $barva = "bílá")
    {
        $this->setBarva($barva);
        self::$pocet++;
    }

    public function setBarva(string $barva): void
    {
        $this->barva = $barva;
    }

    public function zadupej(): string
    {
        return "Dupy dup";
    }

    public function predstavSe(): string
    {
        return "„Moje barva je {$this->barva}, dělám {$this->ozviSe()} a umím dupat: {$this->zadupej()}“";
    }

    public abstract function ozviSe(): string;

}

final class Krava extends Zvire
{
    private string $zvuk;

    public function __construct(string $barva, string $zvuk)
    {
        $this->zvuk = $zvuk;
        parent::__construct($barva);
    }

    public function ozviSe(): string
    {
        return $this->zvuk;
    }
}

//class Tele extends Krava {}

class Slon extends Zvire
{
    public function ozviSe(): string
    {
        return "Tůůůůů";
    }
}

//$mlok = new Zvire();
//$mlok->setBarva("šedá");
//echo $mlok->predstavSe();
//
//echo "<br>";
var_dump(Zvire::getPocet());

$milka = new Krava("fialová", "Bůůůů");
//$milka->setBarva("fialová");
echo  $milka->predstavSe();

echo "<br>";
var_dump(Zvire::getPocet());

$bimbo = new Slon();
$bimbo->setBarva("šedá");
echo  $bimbo->predstavSe();
var_dump(Zvire::getPocet());
