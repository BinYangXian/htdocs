<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 14:13
 */
//循环：
for ($i=0;$i<100;$i++){
    echo 'Hello'.$i.'<br>';

    if ($i==10){
        break;
    }
    if ($i==5){
        continue;
    }
    echo 'Run here'.$i.'<br>';
}

//$i=0;
//while ($i<100){
//    echo 'Hello '.$i.'<br>';
//    $i++;
//}

//$i = 0;
//do {
//    echo 'Hello '.$i.'<br>';
//    $i++;
//} while ($i < 100);

