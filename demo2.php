<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/13
 * Time: 下午1:43
 */
$x=5; // 全局作用域

function myTest() {
    $y=10; // 局部作用域
    global $x;
    $x = 20;
    echo "<p>测试函数内部的变量：</p>";
    echo "变量 x 是： $x";
    echo "<br>";
    echo "变量 y 是：$y";
}

myTest();
echo $x;






