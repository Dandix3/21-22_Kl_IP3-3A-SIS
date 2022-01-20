<?php

require_once("arraystorage.class.php");
require_once("sessionstorage.class.php");

session_start();

$myData = new SessionStorage();
var_dump($myData->greeting);