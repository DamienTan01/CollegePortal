<?php
$db = require __DIR__.'./connect.php';
$id = $_POST['id'];
$comment = $_POST['comment'];
$jwt = $_COOKIE['jwt'];
if ($jwt==null){
    exit("Pls Login First");
}

$jwt = explode('.',$jwt);

$playload = json_decode(base64_decode($jwt[1]));
if ($playload->sub!=null){
    $st = $db->prepare("SELECT `comment`,`number` FROM `school` WHERE `id`=:id");
    $st->bindParam(":id",$id);
    $st->execute();
    $data = $st->fetchAll(PDO::FETCH_ASSOC);
    $number = $data[0]['number'];
    $fen = $data[0]['comment'];
    $sum = $number*$fen+$comment;
    $number++;
    $comment=$sum/$number;
    $st = $db->prepare("UPDATE `school` SET `comment`=:comment,`number`=:number WHERE `id`=:id");
    $st->bindParam(":id",$id);
    $st->bindParam(":comment",$comment);
    $st->bindParam(":number",$number);
    $st->execute();
    echo "success";
}else{
    exit("fail");
}

