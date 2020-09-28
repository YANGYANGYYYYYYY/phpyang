<?php
$arr=array('1','32','44','654','21','999','3');
maxarr($arr);
function maxarr($arr)
{
$max=0;
$num=0;
$i=0;
while($arr[$i])
{
if($arr[$i]>$max){
$max=$arr[$i];
$num=$i;
$i++;
}else{
$i++;
}
}
echo "---最大值=‘$max'-----下标='$num'---\n";
}

?>
