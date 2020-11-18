<?php
$db = require __DIR__.'./connect.php';
$school = $_POST['school'];
$comment = $_POST['comment'];
$brief = $_POST['brief'];
if ($school==null || $comment==null || $brief==null){
    exit("fail");
}
$jwt = $_COOKIE['jwt'];
$jwt = explode('.',$jwt);
$playload = json_decode(base64_decode($jwt[1]));
if ($playload->sub=="admin"){
    $st = $db->prepare("INSERT INTO `school` (`name`, `number`, `comment`,`brief`) VALUE 
(:school, 1, :comment,:brief)");
    $st->bindParam(":school",$school);
    $st->bindParam(":comment",$comment);
    $st->bindParam(":brief",$brief);
    $st->execute();
    echo "success";
}else{
    exit("fail");
}