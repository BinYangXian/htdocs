<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 14:58
 */
$str='Hello PHP Java C# C++';

echo strpos($str,'o').'<br>'; //与一般语言相同 4
echo strpos($str,'PH').'<br>'; //与一般语言相同 6

$str1=substr($str,2,3);
echo $str1.'<br>';  //llo

//$result=str_split($str);
//$result=str_split($str,2);//分割宽度为2，默认为1
//print_r($result) ;
$result=explode(' ',$str);//以空格分割字符串
print_r($result);

//字符串的连接
$num=100;
//$str2=$str.'<br>Objective-C'.$num; //较为繁琐
//echo $str2;
$str2="$str<br>Objective-C $num"; //较为简易，php的好处
echo $str2;