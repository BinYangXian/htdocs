<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 17:01
 */
require 'lib.php';//也可用include，但是require是依赖项的意思，没有找到就会提示错误，include只会警告。
// 每一次require，都会执行一个lib.php文件；而require_once 可以防止重复引用
sayHello();