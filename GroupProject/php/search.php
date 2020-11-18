<?php
$db = require __DIR__.'./connect.php';
$name = $_POST['name'];
$st = $db->prepare("SELECT `id`,`name`,`comment` FROM `school` WHERE `name`=:schoolName");
$st->bindParam(":schoolName",$name);
$st->execute();
$res = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res,JSON_UNESCAPED_UNICODE);

