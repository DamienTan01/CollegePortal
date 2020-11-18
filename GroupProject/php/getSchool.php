<?php
$db = require __DIR__.'./connect.php';

$jwt = $_COOKIE['jwt'];

$jwt = explode('.',$jwt);
//echo base64_decode($jwt[0]);
$playload = json_decode(base64_decode($jwt[1]));
$username = $playload->sub;
$st = $db->prepare("SELECT `id`,`name`,`comment` FROM `school`");
$st->execute();
$data = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);




