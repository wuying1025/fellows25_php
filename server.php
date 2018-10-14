<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/14
 * Time: 上午9:21
 */

//$name = $_GET['username'];
//$p = $_GET['pwd'];

//$name = $_POST['username'];
//$p = $_POST['pwd'];



//$s = $_POST['sex'];
//$h = $_POST['hobby'];
//
//var_dump($h);

//if($name=='admin' && $p == '123'){
//    echo '恭喜成功登录';
//}else{
//    echo '用户名或者密码错误';
//}

//echo "您的用户名是:".$name."密码是:".$p,$s;

//get  post   put  delete  head

$name = $_GET['name'];
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];

if($name == ''){
    echo 'nameErr';
}elseif($p1 == ''){
    echo 'p1Err';
}elseif($p2 == ''){
    echo 'p2Err';
}elseif($p1 != $p2){
    echo 'error';
}else{
    echo 'success';
}
















