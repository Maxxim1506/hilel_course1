<?php

//Действия с числами


$a1 = 7;
$b1 = 3;
echo $a1 % $b1 . "<br>";

$a2 = 7;
$b2 = 7.15;
$c2 = round($a2 +$b2);
echo $c2 . "<br>";

echo sqrt(25) . "<br>";

//Действия со строками

$str = 'Десять негритят пошли купаться в море';

$arr1 = explode(' ', $str);
var_dump($arr1);
echo $arr1[3] . "<br>";


echo $str[16] . "<br>";

$str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
echo $str . "<br>";
echo mb_strlen($str) . "<br>";

//Действия с логическими значениями

$num1 = 1;
 if (true == $num1) {
 	echo 'Правильно' . "<br>";
 } else {
 	echo 'Не правильно' . "<br>";
 }
 $num2 = 0;
 if (false === $num2) {
 	echo 'Правильно' . "<br>";
 } else {
 	echo 'Не правильно' . "<br>";
 }
 
 $str1 = 'three';
 $str2 = 'три';

 if (mb_strlen($str1) > mb_strlen($str2)) {
 	echo '$str1 длиннее $str2'. "<br>";
 } else {
 	echo '$str2 длиннее $str1' . "<br>";
 }

 $n1 = 125 * 13 + 7;
 $n2 = 223 + 28 * 2;

 if ($n1 > $n2) {
 	echo 'Число в переменной $n1 больше числа в переменной $n2';
 } else {
 	echo 'Число в переменной $n2 больше числа в переменной $n1';
 }
 
 




?>
