<?php
$username = $_POST['username'];
$password = $_POST['password'];
//$username = 'admin';

//$password = 'admin';


if (checkPassword($username, $password)){
    $res = jwt($username);
    setcookie('jwt',$res,time()+5*60*24*60);

    echo 'success';
}else{
    exit('fail');
}
function jwt($username)
{
    $time = time() + 5*24*60*60;
    $head = array(
    'typ'  => 'JWT',
     'alg' => 'MD5'
    );
    $playload = array(
        'sub'  => $username,
        'exp'  => $time,
        'iat'  => time()
    );
    $head = base64_encode(json_encode($head));
    $playload = base64_encode(json_encode($playload));
    $h = $head.".".$playload.'abc123';
    $les = md5($h);
    return $head.'.'.$playload.'.'.$les;
}

function checkPassword($username, $password)
{
    $myUsername = 'root';
    $myPassword = 'root';
    $serverName = 'localhost';
    $db = 'school';
    try{
        $Login = false;
        $con = new PDO("mysql:host=$serverName;dbname=$db",$myUsername,$myPassword);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $st = $con->prepare("SELECT `password` FROM `user` WHERE `username`=:username");
        $st->bindParam(":username",$username);
        $st->execute();
        $res = $st->fetchAll(PDO::FETCH_ASSOC);
        if (md5($password) == $res[0]['password']){
            $Login = true;
        }

    }catch (PDOException $e){
        exit($e->getMessage());
    }
    $con = null;
    return $Login;
}

