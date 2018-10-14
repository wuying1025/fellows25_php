<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/13
 * Time: 下午2:12
 */
class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }

    function what_color() {
        return $this->color;
    }
}
//
$c = new Car();
$c1 = new Car('red');
echo $c -> what_color();
echo $c1 -> what_color();