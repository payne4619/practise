<?php

//Note: 变量可用性 与所有其他超全局变量不同，$GLOBALS在PHP中总是可用的。
function test(){
    $foo = "local variable";
    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
    echo '$foo in current scope: ' . $foo . "<br>";
}
$foo = "Example content";
test();
/**
 * 运行结果：
 * $foo in global scope: Example content
$foo in current scope: local variable
 */
echo $_SERVER['SCRIPT_NAME'];