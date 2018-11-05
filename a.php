<?php
//1.实现1+2+3+...+100的和；要求使用三种方式

//1.1函数
echo array_sum(range(1,100));

//1.2递归
function get_sum($n)
{
    return $n==1?1:$n+get_sum($n-1);
}
echo get_sum(100);

//1.3循环
$sum = 0;
for ($i=1;$i<=100;$i++)
{
    $sum +=$i;
}
echo $sum;

//2.编写一个程序，实现N的阶乘，公式为：N! = N*（N-1）*（N-2）*...*1

//3.字符串翻转

//3.1函数
$str = "abcdef";
echo strrev($str);
//3.2循环
function reveres_i($str)
{
    for ($i=1;$i<=strlen($str);$i++)
    {
        echo substr($str,-$i,1);
    }
    return;
}
//3.3递归
function reveres_r($str)
{
    if (strlen($str)>0)
    {
        reveres_r(substr($str,1));
    }
    echo substr($str,0,1);
    return;
}
reveres_i("abcdef");
reveres_r("abcdef");
?>