<?php
abstract class myclass{
    abstract protected function getkeyvalue();
    abstract protected function getvalue($value);
    public function getlee(){
        print $this->getkeyvalue();
    }
}

class mineclass extends myclass{
     protected function getkeyvalue(){
        return "output mineclass getkeyvalue ! <br>";
     }
     public function getvalue($value){
        echo "out put myclass $value getvalue !<br>";
     }
}

$new1 = new mineclass();
$new1->getlee();
$new1->getvalue('func_');
/**
 * 运行结果：
 * output mineclass getkeyvalue !
 * out put myclass func_ getvalue !
 *
 */

abstract class abclass{
    abstract protected function prefixname($name);

}

class coclass extends abclass{
    public function prefixname($name,$separator='.'){
        if($name == 'payneman'){
            $prefix = 'Mr';
        }else if($name == 'paynewomen'){
            $prefix = 'Mrs';
        }
        return "$prefix{$separator}$name";
    }
}

$new1 = new coclass();
echo $new1->prefixname('payneman');