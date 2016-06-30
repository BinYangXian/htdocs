<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 11:15
 */
//1、申明变量并赋值：
$a = 10;
$a = 20;
$b = 5;
echo $a + $b;
echo '<br>';
//2.申明常量：
const THE_VALUE=100;//常量只能赋值一次
echo THE_VALUE;

define("THE_VALUE",200);//也只能赋值一次
echo THE_VALUE;