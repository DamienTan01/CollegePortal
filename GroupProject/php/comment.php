<?php
$db = require __DIR__.'./connect.php';
$comment = $_POST['comment'];
$id = $_POST['id'];
$jwt = $_COOKIE['jwt'];
if ($jwt==null){
    exit("Pls Login First");
}
$jwt = explode('.',$jwt);
$playload = json_decode(base64_decode($jwt[1]));
$st = $db->prepare("INSERT INTO `coment` (`username`,`content`,`schoolId`) VALUE (:username,
:content, :schoolId)");
$st->bindParam(":username",$playload->sub);
$st->bindParam(":content",$comment);
$st->bindParam(":schoolId",$id);
$st->execute();
echo 'success';