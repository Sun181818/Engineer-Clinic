<?php

      require 'connectdb.php';
      $pro_id = $_GET['pro_id'];
      $q = "DELETE FROM profressor WHERE pro_id='$pro_id'";
      $result = mysqli_query($dbcon,$q);

      if($result){
        echo "Delete Success";
        echo "<hr>";
        echo "<a href='show_table.php'>show profressor table</a>";
        // header("Location: show_table.php");
      }
      else {
        echo "Error".mysqli_error($dbcon);
      }

      mysqli_close($dbcon);
