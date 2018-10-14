<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/13
 * Time: 下午1:58
 */
function myTest() {
    static $x=0;
    echo "<h1>". $x ."</h1>";
    $x++;
}

myTest();
myTest();
myTest();

//$cars=array("Volvo","BMW","SAAB");
////echo $cars[1];
//
//$yy = 'zhangsan';
//$xx = "sss";
//echo "my name is $yy";
//var_dump(strpos("Hello worl!","world"));
//define("GREETING", "Welcome to W3School.com.cn!");
//echo GREETING;
//
//$x = array(1,2,3);
//$y = array(3,4);
////$z = $y + $x;
//echo $x;

//$x = 5;
//for($x;$x<10;$x++){
//    echo $x;
//}

//function fn(){
////    return 1;
//}
//
//var_dump(fn());

$arr = array(1,2,3,4,5,6);
////var_dump($arr[0]);
//foreach ($arr as $index=>$value){
//    echo $value,$index;
//}

//array_push($arr,'7');
//$arr[8] = 7;
//$arr[] = 666;
//var_dump($arr);
//
//list($x,$y) = array(1,2);
//echo $x,$y;


//foreach ($arr as $index=>$value){
//    echo $value;
//}

//$cars=array(3,5,3,1,3,4,5);
//rsort($cars);

echo $_SERVER['HTTP_USER_AGENT'];

