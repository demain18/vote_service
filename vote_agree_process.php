<?php
session_start();
require('./asset/php/db_connect.php');

$post_number=$_POST['vote-agree-postnumber'];
$sql = "SELECT * FROM {$_SESSION['session_user_school']}_post WHERE post_number = $post_number and agree_user LIKE '%{$_SESSION["session_user_id"]}%'";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row_cnt = mysqli_num_rows($result);
/*
echo ('학교명 : '.$_SESSION['session_user_school'].'<br />');
echo ('글번호 : '.$post_number.'<br />');
echo ('세션_유저아이디 : '.$_SESSION["session_user_id"].'<br />');
echo '<script>alert("row_cnt : '.$row_cnt.'")</script>';
*/
if($row_cnt == 1) {
    echo '<script>alert("이미 채택한 청원입니다.")</script>';
    echo("<script>location.replace('dashboard.php');</script>");
} else {
    $sql = "
    UPDATE {$_SESSION['session_user_school']}_post
        SET agree_count = agree_count + 1
        WHERE post_number = '$post_number'
    ";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    $sql = "
    UPDATE {$_SESSION['session_user_school']}_post
        SET agree_user = concat(agree_user, '{$_SESSION["session_user_id"]}, ')
        WHERE post_number = '$post_number'
    ";
    /*
    $sql = "
    INSERT INTO {$_SESSION['session_user_school']}_post
    (agree_count)
    VALUES(
        '{$_SESSION["session_user_id"]}'
    )
    ";
    */
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    echo ('<script>alert("청원에 동의했습니다.")</script>');
    echo("<script>location.replace('dashboard.php');</script>");
}
/*
if($result == false){
    echo '<script>alert("저장 하는 과정에서 문제가 생겼습니다, 관리자에게 문의해 주세요.")</script>';
    error_log(mysqli_error($conn));
    echo("<script>location.replace('dashboard.php');</script>");
} else {
    echo("<script>location.replace('dashboard.php');</script>"); 
}
*/
?>