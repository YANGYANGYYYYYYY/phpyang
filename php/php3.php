<?php 
$test = 'aaaaaa'; 
$abc = &$test; 
unset($test); 
//echo $abc; 
echo '===php3====';
//var_dump($test);
?>
