<?php
require('./asset/php/db_connect.php');
$school=$_POST['school_select'];
$user_name=$_POST['user_name'];
$user_id=$_POST['user_id'];
$user_pw=$_POST['user_pw'];
$user_pwc=$_POST['user_pwc'];
$user_type=$_POST['user_type'];
/*
echo ($school.'</br>');
echo ($user_name.'</br>');
echo ($user_id.'</br>');
echo ($user_pw.'</br>');
echo ($user_pwc.'</br>');
echo ($user_type.'</br>');
*/

if($school==NULL || $user_name==NULL || $user_id==NULL || $user_pw==NULL || $user_pwc==NULL || $user_type==NULL) {
    echo("<script>alert('빈칸을 모두 채워주세요.')</script>");
    echo("<script>location.replace('register.html');</script>"); 
    exit();
}
if($user_pw!=$user_pwc) {
    echo("<script>alert('비밀번호와 비밀번호 재입력이 다릅니다.')</script>");
    echo("<script>location.replace('register.html');</script>");
    exit();
}

$sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$user_row = mysqli_num_rows($result);
if($user_row == 1) {
    echo("<script>alert('중복된 아이디입니다.')</script>");
    echo("<script>location.replace('register.html');</script>");
    exit();
}

$sql = "
INSERT INTO user_info
  (school, user_name, user_id, user_pw, user_type)
  VALUES(
      '$school',
      '$user_name',
      '$user_id',
      '$user_pw',
      '$user_type'
  )
";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo '<script>alert("회원가입하는 과정에서 문제가 발생했습니다, 관리자에게 문의해 주세요.")</script>';
    error_log(mysqli_error($conn));
  } else {
    echo("<script>alert('회원가입에 성공했습니다!')</script>");
    echo("<script>location.replace('dashboard.php');</script>"); 
  }
?>