<?php
$id = $_POST['id']; $pwd = $_POST['pwd'];
$title = $_POST['title']; $content = $_POST['cont'];
$time=date("Y-m-d H:i:s");
$con = mysqli_connect("localhost", "root", "990531", "mydb") or die("mysql connect error");

$query = "SELECT *from member where id='$id';";
$result = mysqli_query($con, $query) or die("query error1");
$count = mysqli_num_rows($result);

$query2 = "SELECT * from member where pwd='$pwd';";
$result2 = mysqli_query($con, $query2) or die("query error2");
$count2 = mysqli_num_rows($result2);

$query4 = "select* from board;";
$result4 = mysqli_query($con, $query4);
$count4 = mysqli_num_rows($result4);
$num = $count4+1;

if($count == 1 && $count2 == 1) {
 $query3 = "Insert into board (num,id, pwd, title, content, date) values('$num','$id', '$pwd', '$title', '$content','$time');";
  $result3 = mysqli_query($con, $query3) or die("query error3");

  echo "글 작성이 완료되었습니다.";
  echo '<a href="/board.php">게시글 목록 보기</a>';
  exit();
}
else {
   echo "비밀번호가 틀렸습니다.";
   echo '<a href="/write.php">이전으로</a>';
}
?>
