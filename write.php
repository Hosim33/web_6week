<?php
$con = mysqli_connect("localhost", "root", "990531", "mydb") or die("mysql connect error");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>글 작성</title>
 <body>
  <h1 align='center'>글 작성</h1>
<form action='write2.php' method='post'>
<table border='1'>
    <tr>
      <th>작성자</th>
      <td>
        <input type='text' name='id'>
      </td>
   </tr>
    <tr>
      <th>제목</th>
      <td>
        <input type='text' name='title'>
      </td>
    </tr>
    <tr>
      <th>내용</th>
      <td>
        <textarea name='cont' rows="8" cols="80"></textarea>
      </td>
    </tr>
    <tr>
      <th>비밀번호</th>
      <td>
        <input type='password' name='pwd'>
      </td>
    </tr>
    </table>
<input type='submit' value='작성'>
</form>
</body>
</html>
