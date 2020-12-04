<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['pw'])) {
  echo "로그인 정보","<br/>\n";
  echo "id :", $_SESSION['id'];
  echo "<br/>\n";
  echo "pw :", $_SESSION['pw'];
}
else {
  header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>index</title>
</head>
<body>
  <h1><a href="write.php">게시글 작성하기</a></h1>
    <h3><a href="logout.php">로그아웃하기</a></h3>
</body>
