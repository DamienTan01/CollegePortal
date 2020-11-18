<?php
$db = require __DIR__.'./connect.php';
$id = $_POST['id'];
$jwt = $_COOKIE['jwt'];
$jwt = explode('.',$jwt);
$playload = json_decode(base64_decode($jwt[1]));
if ($playload->sub=="admin"){
    $st = $db->prepare("DELETE FROM `school` WHERE `id`=:id");
    $st->bindParam(":id",$id);
    $st->execute();
    echo "success";
}else{
    exit("fail");
}

