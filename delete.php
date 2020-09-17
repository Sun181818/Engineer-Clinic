<?php
  require 'connectdb.php';

  $pro_id = 4;

  $q = "DELETE FROM profressor WHERE pro_id='$pro_id'";

  $result = mysqli_query($dbcon,$q);

  if($result){
    echo "Delete Success";
  }
  else {
    echo "Error".mysqli_error($dbcon);
  }

  mysqli_close($dbcon);
