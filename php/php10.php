<?php 
function get_arr_ref(&$arr){ 
unset($arr[0]);//引用传递，传递的是全局变量地址信息，可改变全局变量信息 
} 
function get_arr($arr){ 
unset($arr[0]); //值传递，拷贝值作为函数的局部变量，作用域只在函数生命周期内
} 
$arr1 = array(1, 2); 
$arr2 = array(1, 2); 
get_arr_ref($arr1); 
get_arr($arr2); 
//echo count($arr1);
//echo "=======\n";
//echo count($arr2);
?>
