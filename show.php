<?php

      require 'connectdb.php';

      $q = "SELECT * FROM profressor";

      $result = mysqli_query($dbcon,$q);

      if($result){
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
           echo "ProfressorID : ".$row['pro_id']."<br>";
           echo "NameTitle : ".$row['name_title']."<br>";
           echo "Firstname : ".$row['first_name']."<br>";
           echo "Lastname : ".$row['last_name']."<br>";
           echo "Email : ".$row['email']."<br>";
           echo "Expert : ".$row['expert']."<br>";
           echo "<hr>";
        }
        mysqli_free_result($result);
      }
      else {
        echo "Error".mysqli_error($dbcon);
      }

      mysqli_close($dbcon);
