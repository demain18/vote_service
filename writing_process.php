<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '1234',
  'voteservice');
$today = date("Ymd");
// id 자동 상승을 해야만 id값을 넣어서 dashboard가 정상적으로 작동됨
$sql = "
  INSERT INTO post
    (title, description, date, agree_count)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        '$today',
        '0',
        NOW()
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '<script>alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요')</script>';
  error_log(mysqli_error($conn));
} else {
  echo("<script>location.replace('dashboard.php');</script>"); 
}
?>