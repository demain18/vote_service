<?php
session_start();
require('./asset/php/db_connect.php');
$comment_description = $_POST['description'];
$comment_user_id = $_SESSION["session_user_id"];
$comment_user_name = $_SESSION["session_user_name"];
$comment_post = $_POST['vote_number'];
echo $comment_description.'<br />';
echo $comment_user_id.'<br />';
echo $comment_user_name.'<br />';
echo $comment_post.'<br />';
$sql = "
  INSERT INTO comments
    (comment_description, comment_user_id, comment_user_name, comment_post)
    VALUES(
        '$comment_description',
        '$comment_user_id',
        '$comment_user_name',
        '$comment_post'
    )
";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
if($result == false){
  echo '<script>alert("comment를 저장 하는 과정에서 문제가 생겼습니다, 관리자에게 문의해 주세요.")</script>';
  error_log(mysqli_error($conn));
  echo("<script>location.replace('vote_thisweek.php');</script>");
} else {
  echo("<script>location.replace('vote_thisweek.php');</script>"); 
}
?>