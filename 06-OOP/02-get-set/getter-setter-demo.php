<?php

class EncapsulationDemo
{
    private float $number = 0;

    /**
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }

    /**
     * @param float $number
     */
    public function setNumber(float $number): void
    {
        if ($number < 0) {
            throw new InvalidArgumentException("Nelze uložit záporné číslo");
        }
        $this->number = $number;
    } // umožňuje pouze kladná čísla
}

$var = new EncapsulationDemo();

$var->setNumber(15);
var_dump($var->getNumber());

try {
    $var->setNumber(-1);
    var_dump($var->getNumber());
} catch (Exception $e) {
    var_dump($e->getMessage());
}


class EncapsulationDemo2 {
    private float $number = 0;

    public function __get($varName)
    {
        if ($varName == "number")
        {
            return $this->number;
        }
    }

    public function __set($varName, $value)
    {
        if ($varName == "number")
        {
            if (!is_numeric($value)) {
                throw new InvalidArgumentException("Hodnota není číselná");
            } elseif ($value < 0) {
                throw new InvalidArgumentException("Nelze uložit záporné číslo");
            }
            $this->number = $value;
        }
    }
}

$var = new EncapsulationDemo2();

$var->number = 15;
var_dump($var->number);

try {
    $var->number = -1;
    var_dump($var->number);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

try {
    $var->number = "stringy string";
    var_dump($var->number);
} catch (Exception $e) {
    var_dump($e->getMessage());
}