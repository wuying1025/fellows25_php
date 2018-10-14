<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/14
 * Time: 上午9:21
 */

//$name = $_GET['username'];
//$p = $_GET['pwd'];

$name = $_POST['username'];
$p = $_POST['pwd'];
//$s = $_POST['sex'];
//$h = $_POST['hobby'];
//
//var_dump($h);

if($name=='admin' && $p == '123'){
    echo '恭喜成功登录';
}else{
    echo '用户名或者密码错误';
}

//echo "您的用户名是:".$name."密码是:".$p,$s;

//get  post   put  delete  head