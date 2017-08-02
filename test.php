<?php
spl_autoload_register(function($classname){
	echo "want to load class $classname. \n";
	throw new preException ("unable to load class $classname.");
	//throw new Exception ("unable to load class $classname. \n");
});

try{
	$obj = new loadclassname;
}catch(Exception $e){
	echo $e->getMessage(),"\n";
}
/**
 * 运行结果
 * want to load class loadclassname. want to load class preException.
 * Fatal error: Class 'preException' not found in D:\WWW\practise\test.php on line 4
 *
 */
