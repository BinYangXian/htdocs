<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 14:41
 */

function traceNum()
{
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0 && $i % 3 == 0) {
            echo $i . '<br>';
        }
    }
}

traceNum();