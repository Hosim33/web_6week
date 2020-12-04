<?php
$num = $_GET['num'];
$con = mysqli_connect("localhost", "root", "990531", "mydb") or die("mysql connect error");
$query = "SELECT * from board where num='$num';";
$result = mysqli_query($con, $query) or die("query error");
$rows = mysqli_fetch_array($result);
?>
<style media="screen">
  table{
    border-collapse: collapse;
  }
</style>
<table border='1px' width="700">
<tr>
<td colspan='3' align='center' height="50">
<?php echo $rows['title'] ?>
</td>
</tr>
<tr>
<td width="100">작성자</td>
<td>
  <?php echo $rows['id'] ?>
</td>
</tr>
<tr>
  <td width="100">조회수</td>
<td>
<?php echo $rows['hit'] ?>
</td>
</tr>
<tr height="200">
  <td colspan='3'>
<?php echo $rows['content'] ?>
</td>
</tr>
</table>
<a href='/showboard.php'>목록으로</a>
