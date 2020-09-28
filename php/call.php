<?php
class Anguo
{
private $num=100;
private $name;
public $sex='F';

function __isset($a)
{
echo "外部校验私有成员'$a'自动调用\n";
}
function __set($fun,$val)
{
$this->$fun=$val;
echo"===='$fun'===赋值==='$val'==\n";
}


function __get($num)
{
if($num=='num')
{
$a=$this->num;
$a++;
echo "静态变量是什么===='$a'\n";
}
}
function baoxian()
{
echo "===保障成功====\n";
}
function __call($funname,$funarg)
{
echo "===保障失败=='$funname'==\n";
}
function __callstatic($funname,$funarg)
  {
    echo "===static静态保障失败=='$funname'==\n";
    }
}
$Anguo=new Anguo();
$Anguo->baoxian();
$Anguo->daikuan();
$Anguo->xinyongka();
$Anguo::yinghangka();
$b=$Anguo->num;
$Anguo->name='杨洋';
echo isset($Anguo->num);
echo isset($Anguo->sex);
