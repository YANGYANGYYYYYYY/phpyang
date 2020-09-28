<?php
echo "\n","====echo======","\n";
//echo可以输出多个字符串
echo 'a','b','c';
echo "\n","========print==","\n";
//print只能输出一个
print 'a';
//echo没有返回值，print有返回值是1
//所以echo比print要快，print可以赋值，echo不可以赋值
echo "\n","===print_r=======","\n";
//显示变量信息，如果是string、integer、float，将打印变量本身，如果是array，按照格式显示键和元素
//会舍弃小数末尾的0，true输出1，false不输出，空字符和null不输出
//类似的方法var_dump会显示更详细的信息
//传参加上true 不打印结果，只返回输出
$arr=array(3,3.0,3.12,'yangyang','',true,false,null);
$str='yangyang01';
var_dump($arr);
echo "\n","==========","\n";
print_r($arr);
echo "\n","==========","\n";
print_r($str);
echo "\n","==========","\n";
$a=print_r($str,true);
echo "$a";
?>
