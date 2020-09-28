<?php
$url='http://www.baidu.com/abc/de/fg.php?id=1';
$path=parse_url($url,PHP_URL_PATH);
$res=pathinfo($path,PATHINFO_EXTENSION);
echo "$res";


?>
