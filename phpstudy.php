<?

$people=array("Peter","Joe","Glenn","Cleveland");

$var=each($people);
var_dump($var);exit;
list($key,$value)=$var;
echo $key."=>".$value."<br>";
echo "<p>";


exit;
/*
 *正则表达式相关
 */
$preg = '/\d{3,4}-?\d{7,8}/';
$arr = array('02161234567','0216-1234567','1234567');
$preg_arr = preg_grep($preg,$arr);
//var_dump($preg_arr);

$str = 'This is an example ok ?';
$preg = '/\b\w{2}\b/'; //匹配任意两个是开头也是结尾的任何单词字符(包括下划线'_')
$num1 = preg_match($preg,$str,$match1);
var_dump($num1);
echo "<br>"; 
var_dump($match1); 
echo "<br>"; 
$num2 = preg_match_all($preg,$str,$match2);
var_dump($num2);
echo "<br>"; 
var_dump($match2); exit;

	
