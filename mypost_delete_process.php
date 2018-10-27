<?php
session_start();
require('./asset/php/db_connect.php');
/*
$plus = "'";
$post_number_out = "$plus"."$post_number"."$plus";
$post_number = $_SESSION["session_empty01"];
*/
$school_post = $_SESSION["session_user_school"];
$user_id = $_SESSION["session_user_id"];
$post_number = $_POST['delete_post'];
/*
$sql = "
DELECT FROM ".$school_post."_post WHERE uploader = '$user_id' and post_number = '$post_number'
";
*/
$sql = "
delete from ".$school_post."_post where uploader = '$user_id' and post_number = '$post_number'
";

// $sql = "ALTER TABLE {$_SESSION['session_user_school']}_post DROP WHERE uploader = '$user_id' and post_number = '$post_number'";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
echo("<script>alert('삭제되었습니다.')</script>");
echo("<script>location.replace('my-upload.php');</script>");
/*
!isset($_POST['submitted'])
if($result) {
    exit();
    echo("<script>location.replace('my-upload.php');</script>");
} else {
    echo("<script>alert('삭제하는 과정에서 문제가 발생했습니다, 관리자에게 문의 바랍니다.')</script>");
    exit();
    echo("<script>location.replace('my-upload.php');</script>");
}
*/
?>