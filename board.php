<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
    table{
      border-collapse: collapse;
    }
    </style>
  <title>게시판</title>
</head>
<body>
  <h1 align="center">게시판</h1>
  <?php
  $con = mysqli_connect("localhost", "root", "990531", "mydb") or die("mysql connect error");
  $query = "select* from board;";
  $result = mysqli_query($con, $query);
  echo "<table border='1px' width='1000'>";
  echo "<th>번호</th>";
  echo "<th>제목</th>";
  echo "<th>작성자</th>";
  echo "<th>날짜</th>";
  echo "<th>조회수</th>";
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "
      <tr>
      <td>".$row['num']."</td>
      <td> <a href=\"view.php?num={$row['num']}\"> {$row [ 'title']} </a> </ td>
      </td>
      <td>".$row['id']."</td>
      <td>".$row['date']."</td>
      <td>".$row['hit']."</td>
      </tr>
      ";
    }
  }
  echo "</table>";
  ?>
<a href="view.php?num=<?php echo $rows['num']?>"></a>
<form action="fin.php" method="get">
  search: <input type="text" name="Search">
  <input type="submit">
</form>
</body>
</html>
