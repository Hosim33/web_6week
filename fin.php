<?php
$search=$_GET['Search'];
$con = mysqli_connect("localhost", "root", "990531", "mydb") or die("mysql connect error");
if(isset($search)){
  $query = "select num, title, id from board where title like '%".$search."%';";
  $result2 = mysqli_query($con, $query);
  while($rows = mysqli_fetch_array($result2)){
      echo $rows['num'];
      echo " ";
      echo $rows['title'];
      echo " ";
      echo $rows['id'];
      echo " ";
  }
}
 ?>
