<?php
    require 'connectdb.php';

    $name_title = $_POST['name_title'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $expert = $_POST['expert'];

    $q = "INSERT INTO profressor (name_title,first_name,last_name,email,expert) VALUES ('$name_title','$first_name ','$last_name','$email','$expert')";

    $result = mysqli_query($dbcon,$q);

    if($result){
      echo "Add Success";
      echo "<hr>";
      echo "<a href='show_table.php'>show profressor table</a>";
    }
    else {
      echo "Error".mysqli_error($dbcon);
    }

    mysqli_close($dbcon);
