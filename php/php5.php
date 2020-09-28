<?php
$var=0;
echo '开始 $var=0';
if($var==false)
{
echo "判断==false成功","\n";
}
else
{
 echo "判断==false失败","\n";
}
if($var===false)
{
 echo "判断===false成功","\n";
}
else
{
 echo "判断===false失败","\n";
}
if($var==null)
{
echo "判断==null成功","\n";
}
else
{
 echo "判断==null失败","\n";
}
$a=isset($var);
echo "isset----->","$a","\n";
$b=empty($var);
echo "empty----->","$b","\n";
$c=$var.boolval(2)?'true':'false';
echo "boolval----->","$c","\n";
$d=intval(321.3);
echo "intval----->","$d","\n";
?>
