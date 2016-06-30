<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>链接数据库</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: fangc
 * Date: 2016/5/12
 * Time: 8:40
 */
$conn = @mysqli_connect('localhost', 'root', '');//@符号可以忽略系统警告的显示在页面

if ($conn) {
    echo "链接成功<br>";
    mysqli_select_db($conn,'wordpress');//参数二为数据库的标识
/*//定位找数据：
    $result=mysqli_query($conn,"SELECT * FROM wp_posts");
    $result=mysqli_query($conn,"SELECT * FROM wp_posts ORDER BY id ASC");//按照id升序/降序排列(DESC)
    $result=mysqli_query($conn,"SELECT * FROM wp_posts WHERE id=1");//index定位找一条数据，
    $result=mysqli_query($conn,"SELECT post_author,post_date FROM wp_posts WHERE id=1");//index定位
//找一条数据，及只显示两列：post_author,post_date。*/

//    $result_arr=mysqli_fetch_array($result);//显示时是数组形式
//    $result_arr=mysqli_fetch_assoc($result);//显示时是键值对形式，由于是弱类型语言，所以与数组形式是一回事
//    print_r($result_arr);
/*    //遍历数据库中的wp_posts表：
    $data_count=mysqli_num_rows($result);
    for ($i=0;$i<$data_count;$i++){
        print_r(mysqli_fetch_assoc($result));
    }*/

    //高效获取数据表中的条数：
    $result=mysqli_query($conn,"SELECT COUNT(*) FROM wp_posts");
//    $result=mysqli_query($conn,"SELECT COUNT(*) FROM wp_posts WHERE post_status='publish'");//筛选
    if ($result){
        $result_arr=mysqli_fetch_array($result);
        echo '数据的条数：'.$result_arr[0];
    }else{
        echo '查询失败';
    }
} else {
    echo '链接失败';
}
?>
</body>
</html>

