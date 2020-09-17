<?php
  require 'connectdb.php';

  $pro_id = 1;
  $first_name = '1a';

  $q = "UPDATE profressor SET first_name = '$first_name' WHERE pro_id = '$pro_id'";

  $result = mysqli_query($dbcon,$q);

  if($result){
    echo "Update Success";
  }
  else {
    echo "Error".mysqli_error($dbcon);
  }

  mysqli_close($dbcon);
