<?php
//反转字符串1，普通方法
function resstr1($str)
{
if(strlen($str)<=1)
{
return $str;
}
$res='';
$arr=str_split($str);
for($i=strlen($str)-1;$i>=0;$i--)
{
var_dump($arr[$i]);
$res=$res.$arr[$i];
}
return $res;
}
//反转字符串2，递归
function resstr2($str)
{
if(strlen($str)<=1)
{
return $str;
}
$res='';
$res=substr($str,-1).resstr2(substr($str,0,strlen($str)-1));
return $res;

}
$str='12345678';
$a=resstr1($str);
echo "========='$a'=====普通====\n";
$b=resstr2($str);
echo "========='$b'=====递归====\n";

?>
