<?php
class papa{

    const aconst = 'a const value ';
    public function __construct(){
        $this->pappa = 'papa';
    }

}

class son extends papa{
    public static $static = 'this is a static value ';
    public function __construct(){
        parent::__construct();
        print "from son's print! and father classname is  $this->pappa. <br>";
    }

    function export(){
        echo self::$static;//调用当前类的静态方法用self::
    }

}

$obj = new son();
$obj->export();
/**
 * 运行结果：
 * from son's print! and father classnameis papa.
 *this is a static value
 *
 */
