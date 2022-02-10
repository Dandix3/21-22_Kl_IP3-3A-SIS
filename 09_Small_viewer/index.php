<?php

require_once "./_includes/bootstrap.inc.php";
$connection = DB::getConnection();
$stmt = $connection->prepare("SELECT * FROM `room` ORDER BY `name`");
$stmt->execute();

$m = new MustacheRunner();
echo $m->render("head", ["title" => "Simple DB viewer"]);
echo $m->render("roomList", ["rooms" => $stmt, "roomDetailName" => "roomDetail.php"]);
echo $m->render("foot");
