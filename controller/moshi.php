<?php
class man{
	
private static $_instance;
private function __construct(){
	echo 'Away from ny house. ';
}

public static function get_instance(){
        //var_dump(isset(self::$_instance));
        
        if(!isset(self::$_instance))
        {
            self::$_instance=new self();
        }
        return self::$_instance;
    }
	
	private function __clone(){
        trigger_error('Clone is not allow' ,E_USER_ERROR);
    }

    function test(){
        echo("test");
    }
}

//$new1 = man::get_instance();
//$new->test();

/*
 *简单工厂模式的实现
 */
abstract class operation {
	abstract public function  getValue($a,$b);
} 

class operationAdd extends operation{
	public function getValue($a,$b){
		return $a+$b;
	}
}

class operationPlus extends operation{
	public function getValue($a, $b){
		return $a-$b;
	}
}

class operationDiv extends operation{
	public function getValue($a, $b){
		try{
			if($b == 0){
				throw new Exception('The dividend cannot be zero!');
			}else{
				return $a/$b;
			}
		}catch(Exception $e){
			echo "错误信息：".$e->getMessage();
		}
	}
}

/**
 * 使用一个单独的类来实现实例化的过程，这个类就是工厂
 */
 class factory{
	 public static function newobj($method){
		switch($method){
			case '+':
				return new operationAdd();
				break;
			case '/':
				return new operationDiv();
				break;
			case '-':
				return new oprationPlus();
				break;
		}
	 }
 }
$output = factory::newobj('/');
$output->getValue(2,0);

 
 
 
 
 
 
 
 
 
 
 
?>