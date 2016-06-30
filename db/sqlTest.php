
<?php

require_once 'wp-config.php';
$page = $_REQUEST['page'];
$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);//@符号可以忽略系统警告的显示在页面

if ($conn) {
  
    // echo 'connect sucess';
    mysqli_select_db($conn,DB_NAME);//参数二为数据库的标识

    $result = mysqli_query($conn, "SELECT post_content,post_date,post_title,ID FROM wp_posts WHERE post_status='publish'order by ID DESC ");

    $data_count=mysqli_num_rows($result);
    $postsArray= array();
    $totalPostsArray=array();
    for ($i=0;$i<$data_count;$i++){

        array_push($postsArray,mysqli_fetch_array($result));
    }
    $totalPostsArray["totalPosts"]=$postsArray;
    echo (json_encode($totalPostsArray));

} else {
    echo 'connect failed';
}
?>
