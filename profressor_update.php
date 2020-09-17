<?php
  require 'connectdb.php';

  $pro_id = $_POST['pro_id'];
  $name_title = $_POST['name_title'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $expert = $_POST['expert'];

  $q = "UPDATE profressor SET name_title = '$name_title' ,first_name = '$first_name',last_name = '$last_name',email = '$email',expert = '$expert' WHERE pro_id = '$pro_id'";

  $result = mysqli_query($dbcon,$q);

  if($result){
    echo "Edit Success";
    echo "<hr>";
    echo "<a href='show_table.php'>show profressor table</a>";
  }
  else {
    echo "Error".mysqli_error($dbcon);
  }

  mysqli_close($dbcon);
