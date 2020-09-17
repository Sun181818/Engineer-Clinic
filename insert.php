<?php
    require 'connectdb.php';

    $name_title = 'Mr.';
    $first_name = 'Tontrakoon';
    $last_name = 'Inchan';
    $email = 'ton@gmail.com';
    $expert = 'Com Engi';

    $query = "INSERT INTO profressor (pro_id,name_title,first_name,last_name,email,expert) VALUES ('','$name_title','$first_name ','$last_name','$email','$expert')";

    $result = mysqli_query($dbcon,$query);

    if($result){
      echo "Already Add Success";
    }
    else {
      echo "Error".mysqli_error($dbcon);
    }

    mysqli_close($dbcon);
