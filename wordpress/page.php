<?php

require_once 'wp-config.php';
//打印所有参数方法：
//$str =$_GET;
////echo $str;//错误
//print_r($_GET);
//接受get方式的页面请求参数 page=多少。
$page = $_REQUEST['page'];

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);//@符号可以忽略系统警告的显示在页面

if ($conn) {
    mysqli_select_db($conn, DB_NAME);//参数二为数据库的标识

    $perpagenum = 10;
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM wp_posts  WHERE post_status='publish'");
    if ($result) {
        $result_arr = mysqli_fetch_array($result);
        $total = $result_arr[0];
        $Totalpage = ceil($Total / $perpagenum);//上舍，取整
    }

    if (!isset($_GET['page']) || !intval($_GET['page']) || $_GET['page'] > $Totalpage)//page可能的四种状态
    {
        $page = 1;
    } else {
        $page = $_GET['page'];//如果不满足以上四种情况，则page的值为$_GET['page']
    }
    $startnum = ($page - 1) * $perpagenum;//开始条数
//    $sql = "select post_content,post_date,post_title,ID from wp_posts order by ID limit $startnum,$perpagenum";//查询出所需要的条数

    $result = mysqli_query($conn, "SELECT post_content,post_date,post_title,ID FROM wp_posts WHERE post_status='publish' ORDER BY ID DESC limit $startnum,$perpagenum  ");
    $data_count = mysqli_num_rows($result);

    $offset_num = $total % 12;
    echo '列偏移量：' . $offset_num;//测试用
    if ($offset_num == 0) {
        $total = intval($data_count / 12);
    } else {
        $total = intval($data_count / 12) + 1;
    }
    echo '数据的页数：' . $total;//测试用
    if ($page <= $total) {

        if ($page < $total) {
            $n = $page * 12;
        } else if ($page == $total) {
            $n = ($page - 1) * 12 + $offset_num;
        }
        $postsArray = array();
        $totalPostsArray = array();
        for ($i = $perpagenum; $i < $n; $i++) {
            array_push($postsArray, mysqli_fetch_array($result));
        }
        $totalPostsArray["totalPosts"] = $postsArray;
        echo(json_encode($totalPostsArray));
    }

} else {
    echo 'connect failed';//测试用
}
?>
