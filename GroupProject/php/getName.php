<?php
$db = require __DIR__.'./connect.php';
$id = $_POST['id'];
$st = $db->prepare("SELECT `name` FROM `school` WHERE `id`=:id");
$st->bindParam(":id",$id);
$st->execute();
$res = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res,JSON_UNESCAPED_UNICODE);