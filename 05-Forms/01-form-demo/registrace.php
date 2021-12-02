<?php

//header("Location: cil.php?uspech=1");
//exit;
//
//var_dump($_GET);
//
//var_dump($_POST);

//var_dump(filter_has_var(INPUT_GET, "name"));
$age = filter_input(
    INPUT_GET, "age",
    FILTER_VALIDATE_INT,
    ["options"=>[
        "min_range"=>13,
        "max_range"=>120,
        "default"=>18
    ]]
);
var_dump($age);
var_dump((int)$_GET['age']);
//var_dump($_SERVER);

$remember = filter_input(INPUT_GET, "remember", FILTER_VALIDATE_BOOLEAN,
    [
    "flags" => FILTER_NULL_ON_FAILURE
]
);
var_dump($remember);