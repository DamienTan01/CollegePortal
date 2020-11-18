<?php
$db = require __DIR__.'./connect.php';
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$st = $db->prepare("SELECT  `name`,`comment` FROM `school` WHERE `name`=:schoolName");
$st->bindParam(":schoolName",$name1);
$st->execute();
$res1 = $st->fetchAll(PDO::FETCH_ASSOC);
$st->bindParam(":schoolName",$name2);
$st->execute();
$res2 = $st->fetchAll(PDO::FETCH_ASSOC);

if ($res1[0]['comment']>$res2[0]['comment']){
    echo "Rate of ".$res1[0]['name']." is better than ".$res2[0]['name'];
}else{
    echo "Rate of ".$res2[0]['name']." is better than ".$res1[0]['name'];
}

