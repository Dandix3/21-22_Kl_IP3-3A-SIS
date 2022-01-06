<?php

abstract class Zvire
{
    private string $barva;

    public function __construct(string $barva = "bílá")
    {
        $this->setBarva($barva);
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

class Krava extends Zvire
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

$milka = new Krava("fialová", "Bůůůů");
//$milka->setBarva("fialová");
echo  $milka->predstavSe();

echo "<br>";

$bimbo = new Slon();
$bimbo->setBarva("šedá");
echo  $bimbo->predstavSe();