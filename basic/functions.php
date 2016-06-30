<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 11:22
 */
//字符连接符号：.
//变量申明符号：$
//函数作为变量：$func
//输出符号：echo
//函数申明符号：function
//html中的换行符：<br>
//函数返回关键字：return
//字符串符号：'字符串'
//混合字符串符号(与html符号混合、与变量混合时用更易于书写)："字符串<br>"
//忽略警告符号：@

//define() 与 const 关键字都有定义常量的意思，老版本php不支持const
//逻辑运算符： && || != ==

//循环与一般c语言类似
//break 与continue 关键字

//include与require的区别

//php的函数:
function traceHelloPHP()
{
    echo "hello php<br>";
    echo "hello world<br>";
}

traceHelloPHP();

//有时候我们会将函数作为参数传递，比如回调方法中：
$func = "traceHelloPHP";
$func();

//函数的传入参数：
function sayHello($name)
{
    echo 'Hello ' . $name . '<br>';
}

sayHello('张三');
sayHello('lisi');

//接收多个参数的函数
function traceNum($a, $b)
{
//    echo 'a='.$a .',b='.$b.'<br>';//此法较繁
    echo "a=$a,b=$b<br>"; //此法较易（动态性编程比较好之处）
}
traceNum(2, 3);

//函数的返回值:
function add($a,$b){
    return $a+$b;
}
echo add(10,2).'<br>';