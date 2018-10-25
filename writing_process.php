<?php
session_start();
require('./asset/php/db_connect.php');
$today = date("Y-m-d");
$descrition = nl2br($_POST['description']);
// n12br함수를 이용해서 엔터값을 </br>으로 변환해준다
$sql = "
  INSERT INTO {$_SESSION['session_user_school']}_post
    (post_number, title, description, uploader, date, agree_count, report_count)
    VALUES(
        '',
        '{$_POST['title']}',
        '$descrition',
        '{$_SESSION['session_user_name']}',
        '$today',
        '0',
        '0'
    )
";
$result = mysqli_query($conn, $sql);
if($result == false){
  echo '<script>alert("저장 하는 과정에서 문제가 생겼습니다, 관리자에게 문의해 주세요.")</script>';
  error_log(mysqli_error($conn));
  echo("<script>location.replace('dashboard.php');</script>");
} else {
  echo("<script>location.replace('dashboard.php');</script>"); 
}
?>
