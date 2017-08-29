<?php

class MyClass
{
    const constant = 'constant value';
    function showConstant() {
        echo  self::constant . "\n";
    }
}

$a = new MyClass();
echo $a::constant." is ok\n";