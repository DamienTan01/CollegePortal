<?php
$db = require __DIR__.'./connect.php';
$id = $_POST['id'];
$jwt = $_COOKIE['jwt'];
if ($jwt==null){
    exit("Pls Login First");
}
$st = $db->prepare("SELECT `username`, `content`, `time` FROM `coment` WHERE `schoolId`=:id");
$st->bindParam(":id",$id);
$st->execute();
$res = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res,JSON_UNESCAPED_UNICODE);