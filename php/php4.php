<?php 
$count = 5; 
function get_count(){ 
static $count = 0; 
return $count++; 
} 
//echo $count; 
//echo "\n";
++$count; 
//echo get_count(); 
echo "\n======php4=====\n";
//echo get_count(); 
//echo "\n";
//echo $count;
?>
