<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 16:30
 */
//PHP是弱化数据类型的语言，你需要变量的时候直接拿来用就行了，不用管类型；且同一个数组中可以存所有类型的数据。
$arr = array();
//$arr[0] = 'Hello';
//$arr[1] = 'world';
//$arr[2] = 2;
//$arr[3] = 3.14;

for ($i=0;$i<100;$i++){
    array_push($arr,'item '.$i);//官方有很多函数，请查阅php.net/manual/zh 中文版
}
$arr['h']='hello';//php数组也支持键值对类型
$arr['w']='world';

print_r($arr);

//数组初始化：
$arr = array('h'=>'hello',1=>'world');
print_r($arr);
echo $arr['h'];//访问其中一个元素
echo $arr[1];//访问其中一个元素
echo $arr[3];//此时越界，因为$arr已经被重定义，上一个被覆盖。

