<?php
echo true? 'true' : 'false' ,"<br>";

$num = 2;
echo $num == 1 ? "1입니다." : "1이 아닙니다.","<br>";

$age = 20;
$my_age = $age ? : 18;
echo $my_age ."<br>";;

$str1 = "Hello world";
$str2 = "with PHP";
$result1 = $str1 ?? $str2;
echo $result1 ."<br>";

$str1 = "Hello world";
$str2 = null;
$result2 = $str1 ?? $str2;
echo $result2 ."<br>";

$str1 = null;
$str2 = "with PHP";
$result3 = $str1 ?? $str2;
echo $result3 ."<br>";