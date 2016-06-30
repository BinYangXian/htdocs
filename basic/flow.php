<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Control Flow</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/11
 * Time: 13:48
 */
//
function getLevel($score)
{
//    if ($score >= 90) {
//        return '优秀';
//    } elseif ($score >= 80) {
//        return '良好';
//    } elseif ($score >= 70) {
//        return '好';
//    } elseif ($score >= 60) {
//        return '可以';
//    } else {
//        return '差';
//    }

//    switch (intval($score/10)){
//        case 10:
//        case 9:
//            return '优秀';
//        case 8:
//            return '良好';
//        case 7:
//            return '好';
//        case 6:
//            return '可以';
//        default:
//            return '差';
//    }

    $result='差';
    switch (intval($score/10)){
        case 10:
        case 9:
            $result= '优秀';
            break;
        case 8:
            $result= '良好';
            break;
        case 7:
            $result= '好';
            break;
        case 6:
            $result= '可以';
            break;
        default:
            $result= '差';
    }
    return $result;
}
echo getLevel(71);
?>
</body>
</html>
