<?php

      require 'connectdb.php';
      $pro_id = $_GET['pro_id'];
      $qpro = "SELECT * FROM profressor WHERE pro_id='$pro_id'";
      $respro = mysqli_query($dbcon,$qpro);
      $rowpro = mysqli_fetch_array($respro,MYSQLI_ASSOC);

 ?>

<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8">
  </head>

  <style>

  body{
    width: 500px;
  }


  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  </style>

<body>



<h3>Profressor</h3>

<div>

  <form action="profressor_update.php" method="post" enctype="multipart/form-data" id="form2">

    <label for="name_title">Name title</label>
    <input type="text" id="name_title" name="name_title" value="<?php echo $rowpro['name_title']; ?>">

    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name" value="<?php echo $rowpro['first_name']; ?>"required>

    <label for="last_name">Last Name</label>
    <input type="text" id="plname" name="last_name" value="<?php echo $rowpro['last_name']; ?>"required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="<?php echo $rowpro['email']; ?>"required>

    <label for="pexpert">Expert</label>
    <input type="text" id="expert" name="expert" value="<?php echo $rowpro['expert']; ?>"required>

    <input type="hidden" value="<?php echo $rowpro['pro_id']; ?>" name="pro_id">
    <input type="submit" value="Edit" id="submit" name="submit">
  </form>
  </div>

</body>
</html>
