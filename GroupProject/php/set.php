<?php
$db = require __DIR__.'./connect.php';
$id = $_POST['id'];
$comment = $_POST['comment'];
$jwt = $_COOKIE['jwt'];
$brief = $_POST['brief'];
if ($jwt==null){
    exit("Pls Login First");
}
$jwt = explode('.',$jwt);
$playload = json_decode(base64_decode($jwt[1]));
if ($playload->sub=="admin"){
    $st = $db->prepare("UPDATE `school` SET `comment`=:comment,`number`=1,`brief`=:brief WHERE `id`=:id");
    $st->bindParam(":id",$id);
    $st->bindParam(":comment",$comment);
    $st->bindParam(":brief",$brief);
    $st->execute();
    echo "success";
}else{
    exit("fail");
}

