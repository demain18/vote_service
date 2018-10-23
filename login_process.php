<?php
require('./asset/php/db_connect.php');
$user_id=$_POST['user_id'];
$user_pw=$_POST['user_pw'];
// echo ($user_id.'<br />');
// echo ($user_pw).'<br />';

$sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$total_rows = mysqli_num_rows($result);
// echo ('first_row : '.$total_rows.'<br />');
if($total_rows == 1) {
    $sql = "SELECT * FROM user_info WHERE user_id='$user_id' and user_pw='$user_pw'";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $total_rows = mysqli_num_rows($result);
    // echo ('second_row : '.$total_rows.'<br />');
    if($total_rows == 1) {
        // 사용자 세션 정보
        $sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
        $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
        $insession_result = mysqli_fetch_array($result);

        $insession_user_number = $insession_result['user_number'];
        $insession_user_id = $insession_result['user_id'];
        $insession_user_name = $insession_result['user_name'];
        $insession_user_school = $insession_result['school'];
        $insession_user_type = $insession_result['user_type'];
        session_start();
        $_SESSION["session_user_number"] = "{$insession_user_number}";
        $_SESSION["session_user_id"] = "{$insession_user_id}";
        $_SESSION["session_user_name"] = "{$insession_user_name}";
        $_SESSION["session_user_school"] = "{$insession_user_school}";
        $_SESSION["session_user_type"] = "{$insession_user_type}";
        
        $sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
        $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
        $user_name_alert = mysqli_fetch_array($result);
        echo("<script>alert('환영합니다, {$user_name_alert['user_name']}님.')</script>");
        // echo("<script>alert('환영합니다, ".$user_name_alert['user_name']."님.')</script>");
        echo("<script>location.replace('dashboard.php');</script>");
        exit();
    } else {
        echo("<script>alert('비밀번호가 틀립니다.')</script>");
        echo("<script>location.replace('index.html');</script>");
        exit();
    }
} else {
    echo("<script>alert('아이디가 틀립니다.')</script>");
    echo("<script>location.replace('index.html');</script>");
    exit();
}
?>