<?php
session_destroy();
echo("<script>alert('로그아웃 됬습니다.')</script>");
echo("<script>location.replace('index.html');</script>");
?>