<?php
function fileShow($dir)
{
$arr=opendir($dir);//打开目录，返回目录下的目录流
while($file=readdir($arr)){//读取目录信息
if($file !='..'&&$file!='.'){
$file1=$dir.'/'.$file;//目录下的全目录名
if(is_file($file1)){
echo "|--'$file'\n";
}
else{
echo "--'$file'\n";
fileShow($file1);
}
}
}
}
fileShow('/home/rong/yangyangtest/php');

?>
