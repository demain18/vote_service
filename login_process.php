<?php
require('./asset/php/db_connect.php');

$user_id=$_POST['user_id'];
$user_pw=$_POST['user_pw'];

$sql = "SELECT * FROM user_info WHERE user_id=$user_id";
$result = mysqli_query($conn, $sql);
if($result->num_rows==1) {
    $sql = "SELECT * FROM user_info WHERE user_pw=$user_pw";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows==1) {
        echo("<script>alert('로그인 성공!')</script>");
        echo("<script>location.replace('dashboard.php');</script>");
        exit();
    } else {
        echo("<script>alert('비밀번호가 틀립니다.')</script>");
        echo("<script>location.replace('login.html');</script>");
        exit();
    }
} else {
    echo("<script>alert('아이디가 틀립니다.')</script>");
    echo("<script>location.replace('login.html');</script>"); 
    exit();
}
?>