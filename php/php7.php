<?php
function add($a)
{
if ($a<=1)
{
return $a;
}
return add($a-1)+add($a-2);
}
for($i=1;$i<=10;$i++)
{
$b=add($i);
echo "$b\n";
}
?>
